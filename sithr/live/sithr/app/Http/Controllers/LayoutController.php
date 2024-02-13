<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permissions_taken;
use App\Models\Vacations_taken;
use App\Notifications\PermissionsRequest;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class LayoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        if (Auth::check()) {
            $new_requests = Permissions_taken::where('status','=','pending')->where('user_id','!=',Auth::user()->id)->count();
            $vacation_requests = Vacations_taken::where('status','=','pending')->where('user_id','!=',Auth::user()->id)->count();
            $attendanceRequests = Attendance::where('user_id','!=',Auth::user()->id)->where('file_path','=',null)->count();
            View::share('new_requests', $new_requests);
            View::share('vacation_requests', $vacation_requests);
            View::share('attendanceRequests', $attendanceRequests);
            View::share(Session::get('msg'));
        }
    }
}
