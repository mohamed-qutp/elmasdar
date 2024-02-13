<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;
//use App\Mail\EmailSender;
use App\Models\Demo;

class DemoController extends Controller
{
    public function demoRequest()
    {
      return view('site.home.request-demo');
    }
    public function sendEmail(Request $request)
    {         
        $validatedData = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required|digits:11', 
            'email' => 'required|email',                          
            'service' => 'required',  
            'state' => 'required', 
            'city' => 'required',
            'zip' => 'required'               
        ], [
            'name.required' => 'Please Enter Client Name ',
            'phone.required' => 'Please Enter Phone Number', 
            'email.required' => 'Please Enter Email', 
            'service.required' => 'Please Choose The Required Service', 
            'state.required' => 'Please Choose The State',           
            'city.required' => 'Please Enter The City',
            'zip.required' => 'Please Enter The ZIP',
        ]);
        if ($validatedData->fails()) {
            $messages = $validatedData->messages();
            return redirect()->back()->with('errors', $messages);
        }                            
        $emailParams = ['name'=>$request->name,'phone'=>$request->phone,'email'=>$request->email,'service'=>$request->service,'state'=>$request->state,
                        'city'=>$request->city,'zip'=>$request->zip,'subject'=>"تفاصيل الخدمة"];           
          
        Mail::send('Email.demoEmail', $emailParams, function($message)use($emailParams) {
        $message->from($emailParams['email']); 
        $message->to('eng.mohamedabdelmeged900@gmail.com')
                ->subject($emailParams['subject']);                                         
        });    
               

        session()->flash('Add', 'تم الارسال بنجاح');
        return redirect()->back();
    }
}
