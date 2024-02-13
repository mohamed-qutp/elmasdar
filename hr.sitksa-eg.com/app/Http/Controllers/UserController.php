<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use App\Notifications\PermissionsRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends LayoutController
{
    use Notifiable;
    
    public function __construct()
    {
        //$this->middleware('admin');
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //abs(floor($minutes))
        // $users = User::all();
        // $users = User::latest()->paginate(3);
        $users = User::orderBy('id','asc')->paginate(10);
        // $users = User::where('id','!=',auth()->user()->id)->orderBy('id','asc')->paginate(10);
        // $users = User::where('name','Rana Samy')->get();
        return view('pages.users.showusers')->with('users',$users);
        // return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('pages.users.adduser',["departments"=>$departments]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
       //dd($request->all());       
            $messages = [
                'required'        => 'يرجى ملأ جميع الحقول المطلوبة',
                'password.min:8'  => 'يجب أن تكون كلمات المرور مكونة من 8 حروف/ارقام او اكثر.',
                'email.unique'    => 'تم استخدام البريد الالكتروني من قبل',
                'username.unique' => 'تم استخدام اسم المستخدم من قبل',
                'username.unique' => 'تم استخدام رقم الجوال من قبل'
            ];
            $this->validate($request,[
                'name'          =>'required',
                'email'         =>'required|email|unique:users,email',
                'username'      =>'required|unique:users,username',
                'password'      =>'required|min:8',
                'phone_number'  =>'required|unique:users,phone_number',
                'confirmpass'   =>'required|min:8',
                
            ]);
            
            
            // $date=date_create($request->input('birthdate'));
            // $newdate = date_format($date,"Y-m-d");
 
            // $u = new User();  
            // $u->name = $request->input('name');
            // //$u->name = auth()->user()->id;
            // $u->email = $request->input('email');
            // $u->username  = $request->input('username');
            // $u->phone_number  = $request->input('phone_number');
            // $u->gender = $request->input('gender');
            // $u->birth_date = $newdate;
            // $u->password = Hash::make($request->input('password'));
            // $u->auth = $request->input('auth');
            // $u->national_id = $request->input('national_id');
            // if(null === $request->input('permission')){
            //     $u->permission = 2;
            //     $u->have_permissions = 2;
            // }else{
            //     $u->permission = $request->input('permission');
            //     $u->have_permissions = 1;
            // } 
 
            // if(null === $request->input('vacations')){
            //     $u->vacations = 21;
            //     $u->have_vacations = 21;
            // }else{
            //     $u->vacations = $request->input('vacations');
            //     $u->have_vacations = 1;
            // }
            // $u->status = 0;
            // $u->save(); 
            // get last inserted id
            $user=User::create([  
            'name'          => $request->input('name'),
            'email'         => $request->input('email'),
            'username'      => $request->input('username'),
            'auth'          => $request->input('auth'),
            //  'gender'        => $request->input('gender'),
            'phone_number'  => $request->input('phone_number'),
            //'birth_date'    => $request->input('birthdate'),
           // 'permission'    => $request->input('permission'),
           // 'vacations'     => $request->input('vacations'),
           // 'national_id'   => $request->input('national_id'),
            'department_id'=>$request->input('department_id'),  
            'password' => bcrypt($request->password),             
            ]); 
            $id = $user->id;
            Session()->put('msg', 'تم اضافة الموظف بنجاح');
            return redirect(route('users.show', $id)); 
        } 
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 2 different methods to get data of id
        $users = User::where('id',$id)->get();        
        return view('pages.users.userdetails',["users"=>$users]);
        // $users = User::find($id);
        // return view('pages.users.userdetails')->with('users',$users);
        // return $users;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::where('id',$id)->get();
        $departments = Department::all();      
        return view('pages.users.useredit',["users"=>$users,"departments"=>$departments]);
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
        $messages = [
            'required' => 'يرجى ملأ جميع الحقول المطلوبة',
            'email.unique' => 'تم استخدام البريد الالكتروني من قبل',
            'username.unique' => 'تم استخدام اسم المستخدم من قبل',
            'phone_number.unique' => 'تم استخدام رقم الجوال من قبل',
        ];
        $this->validate($request,[
            'name'          =>'required',
            'email'         =>'required|email|unique:users,email,'.$id,
            'username'      =>'required|unique:users,username,'.$id,
            'phone_number'  =>'required|unique:users,phone_number,'.$id,            
        ]);

        // 2 methods to update info
        // the first method is like the store() exactly
        // the second method: 
        User::where('id',$id)->update([
            'name'          => $request->input('name'), 
            'email'         => $request->input('email'),
            'username'      => $request->input('username'),
            'auth'          => $request->input('auth'),
            'gender'        => $request->input('gender'),
            'phone_number'  => $request->input('phone_number'),
            'birth_date'    => $request->input('birthdate'),
            'permission'    => $request->input('permission'),
            'vacations'     => $request->input('vacations'),
            'national_id'   => $request->input('national_id'),
            'department_id'=>$request->input('department_id'), 
        ]);

        if($request->input('permission') > 0){
            User::where('id',$id)->update([
                'have_permissions' => 1
            ]);
        }

        if($request->input('vacations') > 0){
            User::where('id',$id)->update([
                'have_vacations' => 1
            ]);
        }
        // return redirect(route('users.edit'))->compact([
        //     'msg' => 'تم التعديل بنجاح',
        //     'user' => $id
        // ]);
        Session()->put('msg', 'تم التعديل بنجاح');
        if(Auth::user()->id == $id){
            return redirect(route('users.edit',Auth::user()->id));
        }else{
            return redirect(route('users.show', $id));
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
        $users = User::find($id);
        $users->delete();
        Session()->put('msg', 'تم حذف الموظف بنجاح');
        return redirect(route('users.index'));
    }

    public function changePassView($id)
    {
        $users = User::where('id',$id)->get();
        return view('pages.users.changePass',["users"=>$users]);
    }

    public function changePass(Request $request, $id)
    {
        if($request->input('password') == $request->input('confirmpassword')){
            $messages = [
                'required' => 'يرجى ملأ جميع الحقول المطلوبة',
                'password.min:8' => 'يجب أن تكون كلمات المرور مكونة من 8 حروف/ارقام او اكثر.',
            ];
            $this->validate($request,[
                'password'=>'required|min:8',
                'confirmpassword'=>'required|min:8',
            ], $messages);

            User::where('id',$id)->update([
                'password' => Hash::make($request->input('password'))
            ]);
            Session()->put('msg', 'تم التعديل بنجاح');
            return redirect(route('users.edit',Auth::user()->id));
        }else{
            Session()->put('errors', 'كلمة المرور لا تطابق تأكيد كلمة المرور');
            return redirect()->back();
        }
    }
}
