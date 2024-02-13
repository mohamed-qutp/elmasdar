<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacations_taken;
use App\Models\User;

class VacationReqController extends LayoutController
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacations = Vacations_taken::where('user_id',auth()->user()->id)->orderby('id','desc')->paginate(5);
        return view('pages.vacations.vacations_index')->with('vacations',$vacations);
    }
    //index substitute employee pending requests
    public function substitute_index()
    { 
        $vacations = Vacations_taken::where('back_up_user',auth()->user()->id)->where('status','=','pending')->orderby('id','desc')->paginate(5); 
        return view('pages.vacations.vacations_substitute_employee_index')->with('vacations',$vacations);
    } 

    //index for admins to show pending requests
    public function index2()     
    {
        $vacations = Vacations_taken::where('user_id','!=',auth()->user()->id)->where('status','=','pending')->whereColumn('back_up_user','=','accepted_by_substitute_employee')->orderby('id','desc')->with('employee')->paginate(5);
        return view('pages.vacations.vacations_index2')->with('vacations',$vacations);
    }

    //index for admins to show old requests
    public function index3()
    {
        $vacations = Vacations_taken::where('user_id','!=',auth()->user()->id)->where('status','!=','pending')->orderby('id','desc')->with('employee')->paginate(5);

        $users = User::all();
        return view('pages.vacations.vacations_index3',['vacations'=>$vacations , 'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->input('range') == "half"){
            $number_of_days = 0.5;
            if($request->input('period') == "morning"){
                $date_from = $request->input('vacdate')." 09:00:00";
                $date_to = $request->input('vacdate')." 13:30:00";
            }else{
                $date_from = $request->input('vacdate')." 13:30:00";
                $date_to = $request->input('vacdate')." 18:00:00";
            }
        }else{
            $from = strtotime($request->input('from')); // or your date as well
            $to = strtotime($request->input('to'));
            $datediff = $to - $from;
            $number_of_days = round($datediff / (60 * 60 * 24)) +1;
            $date_from = $request->input('from');
            $date_to = $request->input('to');
        }
        
        $vacation = new Vacations_taken();
        $vacation->reason = $request->input('reason');
        $vacation->number_of_days = $number_of_days;
        $vacation->date_from = $date_from;
        $vacation->date_to = $date_to;
        $vacation->type = $request->input('type');
        $vacation->user_id = auth()->user()->id;
        $vacation->back_up_user = $request->input('backup');
        $vacation->save();
        $id = $vacation->id;
        Session()->put('msg', 'تم ارسال الطلب بنجاح');
        return redirect(route('vrequest.show',$id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vacation = Vacations_taken::where('id',$id)->with('users')->get();
        return view('pages.vacations.vacation_show')->with('vacation',$vacation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    // update for substitute employee
    public function update1(Request $request, $id)
    { 
        $perm = Vacations_taken::where('id',$id)->get();
        $user = User::where('id',$perm[0]['user_id'])->get();
        
        if($perm[0]['type'] == "بالخصم"){
            Vacations_taken::where('id',$id)->update([
               // 'status' => $request->input('status'),  
                'reason' => $request->input('reason'),
                'accepted_by_substitute_employee' => auth()->user()->id
            ]);
            Session()->put('msg', 'تم تغيير الحالة بنجاح');
            return redirect(route('vrequest.substitute_index'));
        }else{
            if($user[0]['vacations'] > 0){
                if($request->input('status') == 'accepted')
                {
                    Vacations_taken::where('id',$id)->update([
                        //'status' => $request->input('status'),
                        'reason' => $request->input('reason'),
                        'accepted_by_substitute_employee' => auth()->user()->id
                    ]);
                }
                else if($request->input('status') == 'rejected')
                {
                    Vacations_taken::where('id',$id)->update([
                        //'status' => $request->input('status'),
                        'reason' => $request->input('reason'),
                        'accepted_by_substitute_employee' => 0
                    ]);
                }  
               
                Session()->put('msg', 'تم تغيير الحالة بنجاح');
                return redirect(route('vrequest.substitute_index'));
            }else{

                Vacations_taken::where('id',$id)->update([
                   // 'status' => 'rejected',
                    'reason' => 'لا يوجد رصيد اجازات',
                    'accepted_by_substitute_employee' => 0
                ]);
                Session()->put('errors', 'لا يوجد رصيد اجازات');
                return redirect()->back();
            }
        }
    } 

    // update for admins
    public function update2(Request $request, $id)
    {
        $perm = Vacations_taken::where('id',$id)->get();
        $user = User::where('id',$perm[0]['user_id'])->get();
        
        if($perm[0]['type'] == "بالخصم"){
            Vacations_taken::where('id',$id)->update([
                'status' => $request->input('status'),
                'reason' => $request->input('reason'),
                'accepted_by' => auth()->user()->id
            ]);
            Session()->put('msg', 'تم تغيير الحالة بنجاح');
            return redirect(route('vrequest.index2'));

        }else{
            if($user[0]['vacations'] > 0){
                Vacations_taken::where('id',$id)->update([
                    'status' => $request->input('status'),
                    'reason' => $request->input('reason'),
                    'accepted_by' => auth()->user()->id
                ]);

                if($request->input('status') != "rejected"){
                    $new_credit = $user[0]['vacations'] - $perm[0]['number_of_days'];
                    User::where('id',$perm[0]['user_id'])->update([
                        'vacations' => $new_credit
                    ]);
                }
                Session()->put('msg', 'تم تغيير الحالة بنجاح');
                return redirect(route('vrequest.index2'));
            }else{

                Vacations_taken::where('id',$id)->update([
                    'status' => 'rejected',
                    'reason' => 'لا يوجد رصيد اجازات',
                    'accepted_by' => auth()->user()->id
                ]);
                Session()->put('errors', 'لا يوجد رصيد اجازات');
                return redirect()->back();
            }
        }
    }  
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacation = Vacations_taken::where('id',$id)->get();
        $vacation->delete();
        Session()->put('msg', 'تم حذف الاجازة بنجاح');
        return redirect(route('vrequest.index'));
    }

    // search
    public function search(Request $request){

        $search = $request->input('search');
        
        switch ($search) {
            case 'name':
                $obj = $request->input('emp_name');
                $obj2 = $request->input('month');
                $vacations = Vacations_taken::where('user_id',$obj)->where('from', 'LIKE', "%{$obj2}%")->orderby('id','desc')->with('employee')->paginate(50);
                break;

            case 'date':
                $obj = $request->input('month');
                $vacations = Vacations_taken::where('from', 'LIKE', "%{$obj}%")->orderby('id','desc')->with('employee')->paginate(50);
                break;

            case 'type':
                $obj = $request->input('perm_type');
                $status = $request->input('status');
                if($status != "all"){
                    $vacations = Vacations_taken::where('type', 'LIKE', "%{$obj}%")->where('status', 'LIKE', "%{$status}%")->orderby('id','desc')->with('employee')->paginate(50);
                }else{
                    $vacations = Vacations_taken::where('type', 'LIKE', "%{$obj}%")->orderby('id','desc')->with('employee')->paginate(50);
                }
                break;

            default:
                $vacations = Vacations_taken::where('user_id','!=',auth()->user()->id)->where('status','!=','pending')->orderby('id','desc')->with('employee')->paginate(50);
                break;
        }

        $users = User::all();
        return view('pages.vacations.vacations_index3',['vacations'=>$vacations , 'users'=>$users]);
    }
}