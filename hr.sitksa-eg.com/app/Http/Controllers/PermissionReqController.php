<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permissions_taken;
use App\Models\User;
use App\Models\Tasks;
use App\Models\PermissionsTasks;
use Illuminate\Contracts\Session\Session;

class PermissionReqController extends LayoutController
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
        $permissions = Permissions_taken::where('user_id',auth()->user()->id)->orderby('id','desc')->paginate(5);
        return view('pages.permissions.permissions_index')->with('permissions',$permissions);
    }

    //index for admins to show pending requests
    public function index2()
    {
        $permissions = Permissions_taken::where('user_id','!=',auth()->user()->id)->where('status','=','pending')->orderby('id','desc')->with('employee')->paginate(5);
        return view('pages.permissions.permissions_index2')->with('permissions',$permissions);
    }

    //index for admins to show old requests
    public function index3()
    {
        $permissions = Permissions_taken::where('user_id','!=',auth()->user()->id)->where('status','!=','pending')->orderby('id','desc')->with('employee')->paginate(5);

        $users = User::all();
        return view('pages.permissions.permissions_index3',['permissions'=>$permissions , 'users'=>$users]);
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
        $permission = new Permissions_taken();
        $permission->from = $request->input('from');
        $permission->to = $request->input('to');
        $permission->type = $request->input('type');
        $permission->user_id = auth()->user()->id;
        $permission->save();
        $id = $permission->id;
        Session()->put('msg','تم ارسال الطلب بنجاح');
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permissions_taken::where('id',$id)->with('users')->get();
       
        
        return view('pages.permissions.permission_show',['permission'=>$permission]);
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

    // update for admins
    public function update2(Request $request, $id)
    {
        $perm = Permissions_taken::where('id',$id)->get();
        $user = User::where('id',$perm[0]['user_id'])->get();
        
        if($user[0]['permission'] > 0){
            Permissions_taken::where('id',$id)->update([
                'status' => $request->input('status'),
                'reason' => $request->input('reason'),
                'accepted_by' => auth()->user()->id
            ]);

            if($request->input('status') != "rejected"){
                $new_credit = $user[0]['permission'] - 1;
                User::where('id',$perm[0]['user_id'])->update([
                    'permission' => $new_credit
                ]);
            }
            Session()->put('msg','تم تغيير الحالة بنجاح');
            return redirect(route('prequest.show',$id));
        }else{
                if($request->input('type') == 'راحة بالخصم'){
                    Permissions_taken::where('id',$id)->update([
                        'status' => $request->input('status'),
                        'reason' => $request->input('reason'),
                        'accepted_by' => auth()->user()->id
                    ]);
                    Session()->put('msg','تم تغيير الحالة بنجاح');
                    return redirect(route('prequest.show',$id));
                }else{
                    Permissions_taken::where('id',$id)->update([
                        'status' => 'rejected',
                        'reason' => 'لا يوجد رصيد اذونات',
                        'accepted_by' => auth()->user()->id
                    ]);
                    Session()->put('errors','لا يوجد رصيد اذونات');
                    return redirect(route('prequest.show',$id));
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
        $permission = Permissions_taken::find($id);
        $permission->delete();
        Session()->put('msg','تم حذف الاذن بنجاح');
        return redirect(route('prequest.index'));
    }
    // search
    public function search(Request $request){

        $search = $request->input('search');
        
        switch ($search) {
            case 'name':
                $obj = $request->input('emp_name');
                $permissions = Permissions_taken::where('user_id',$obj)->orderby('id','desc')->with('employee')->paginate(500);
                break;

            case 'date':
                $obj = $request->input('month');
                $permissions = Permissions_taken::where('from','LIKE', "%{$obj}%")->orderby('id','desc')->with('employee')->paginate(500);
                break;

            case 'type':
                $obj = $request->input('perm_type');
                $status = $request->input('status');
                if($status != "all"){
                    $permissions = Permissions_taken::where('type', 'LIKE', "%{$obj}%")->where('status', 'LIKE', "%{$status}%")->orderby('id','desc')->with('employee')->paginate(50);
                }else{
                    $permissions = Permissions_taken::where('type', 'LIKE', "%{$obj}%")->orderby('id','desc')->with('employee')->paginate(500);
                }
                break;

            default:
                $permissions = Permissions_taken::where('user_id','!=',auth()->user()->id)->where('status','!=','pending')->orderby('id','desc')->with('employee')->paginate(50);
                break;
        }

        $users = User::all();
        return view('pages.permissions.permissions_index3',['permissions'=>$permissions , 'users'=>$users]);
    }
}
