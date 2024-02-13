<?php

namespace App\Http\Controllers;

use App\Models\Contracts;
use App\Models\Sessions;
use App\Models\User;
use App\Models\Tasks;
use App\Models\Projects;
use App\Models\Permissions_taken;
use App\Models\Vacations_taken;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class HomeController extends LayoutController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if(Date("d") == "31"){
        //     DB::table('users')->where('have_permissions','=','1')->update([
        //         'permission' => 2
        //     ]); 
        // }
        //abs(floor($minutes))
        $users = User::where('id','!=',Auth::user()->id)->orderBy('status','desc')->get();
        $useractivity = User::where('id','!=',Auth::user()->id)->where('status','1')->get();
        $auth = User::where('id',Auth::user()->id)->get();
        $contract = Contracts::where('user_id',Auth::user()->id)->get();
        $tasks = Tasks::where('assigned_to',auth()->user()->id)->where('done','0')->orderby('done','asc')->get();
        $tasksCount = count($tasks);
        $projects = Projects::all();
        $today = Carbon::now();      
        $permissions = Permissions_taken::whereDate('from',$today->toDateString())->orderBy('id','desc')->with('employee')->with('users')->get();
        $vacations = Vacations_taken::whereDate('date_from','>=',$today->toDateString())->whereDate('date_to','>=',$today->toDateString())->whereColumn('back_up_user','=','accepted_by_substitute_employee')->orderBy('id','desc')->with('users')->with('employee')->get();
       
        return view('home',['users'=>$users,"contract"=>$contract,'tasks'=>$tasks,'auth'=>$auth, 'useractivity'=>$useractivity,'projects'=>$projects,'permissions'=>$permissions,'vacations'=>$vacations,'tasksCount'=>$tasksCount]);

    }
}
