<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AttendanceFileController extends LayoutController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendance = Attendance::where('user_id','!=',Auth::user()->id)->orderBy('file_path','ASC')->with('users')->paginate(5);
        return view('pages.attendance.attendance-list',['attendance'=>$attendance]);
    }

    public function index2()
    {
        $attendance = Attendance::where('user_id','=',Auth::user()->id)->orderBy('file_path','ASC')->with('users')->paginate(5);
        return view('pages.attendance.attendance-auth',['attendance'=>$attendance]);
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
        $attendance = new Attendance();
        $attendance->user_id = auth()->user()->id;
        $attendance->month = $request->input('month');
        $attendance->save();
        Session()->put('msg', 'تم ارسال الطلب بنجاح');
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
        $attendance = Attendance::where('id',$id)->with('users')->get();
        return view('pages.attendance.attendance-show',['attendance'=>$attendance]);
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
        $file = new Attendance();
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $mimetype = $file->getMimeType();
            $fileName = $file->getClientOriginalName();

            // first method to store
            // $path = $file->store('AttendanceFiles');
            // second method
            $path = $file->storeAs('AttendanceFiles',time().'.'.$fileName);

            Attendance::where('id',$id)->update([
                'file_path' => $path
            ]);
            Session()->put('msg', 'تم رفع الملف بنجاح');
            return back();            
            
        }
    }                               

    public function fileDownload($id)
    {
        $file = Attendance::where('id',$id)->get();
        return Storage::download($file[0]['file_path']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
    }
}
