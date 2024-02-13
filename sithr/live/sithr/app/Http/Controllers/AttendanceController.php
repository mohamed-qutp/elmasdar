<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends LayoutController
{
    public function attendanceRequest(Request $request)
    {
        $attendance = new Attendance();
        $attendance->user_id = auth()->user()->id;
        $attendance->month = $request->input('month');
        $attendance->save();
        return redirect(route('home'))->with('msg', 'تم ارسال الطلب بنجاح');
    }

    public function attendanceList()
    {
        $attendance = Attendance::orderBy('id','DESC')->with('users')->paginate(5);
        // return $attendance;
        return view('pages.attendance.attendance-list',['attendance'=>$attendance]);
    }

    public function attendanceShow($id)
    {
        $attendance = Attendance::where('id',$id)->with('users')->get();
        return view('pages.attendance.attendance-show',['attendance'=>$attendance]);
    }

    public function attendanceUpdate(Request $request)
    {
        $file_extension = $request->input('file')->getClientOriginalExtension();
        return $file_extension;
    }
}
