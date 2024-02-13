<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contracts;
use App\Models\User;

class ContractController extends LayoutController
{
    public function __construct()
    {
        $this->middleware('admin');
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contracts::orderBy('id','asc')->paginate(5);
        return view('pages.contracts.contract_index')->with('contracts',$contracts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('pages.contracts.contract_create',['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->input('to') > $request->input('from')){
            $contracts = new Contracts();
            $contracts->from = $request->input('from');
            $contracts->to = $request->input('to');
            $contracts->user_id = $request->input('users');
            $contracts->save();

            $id = $contracts->id;
            Session()->put('msg', 'تم تسجيل العقد بنجاح');
            return redirect(route('contract.show', $id));
        }else{
            Session()->put('errors','بيانات العقد غير صحيحة, يرجى مراجعة التواريخ');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contracts = Contracts::where('id',$id)->get();
        return view('pages.contracts.contract_show',["contracts"=>$contracts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contracts = Contracts::where('id',$id)->get();
        return view('pages.contracts.contract_edit',["contracts"=>$contracts]);
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
        Contracts::where('id',$id)->update([
            'from' => $request->input('from'),
            'to' => $request->input('to')
        ]);

        return redirect(route('contract.show', $id))->with('msg' ,'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contracts = Contracts::find($id);
        $contracts->delete();
        return redirect(route('contract.index'))->with('msg','تم حذف العقد بنجاح');
    }
}
