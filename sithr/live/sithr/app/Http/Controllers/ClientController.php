<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;
use App\Models\Projects;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ClientController extends LayoutController
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
        $clients = Client::orderBy('id','asc')->paginate(20);
        $users = User::get();
        return view('pages.clients.clients_index',compact('clients','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.clients.client_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->name = $request->input('name');
        $client->phone_number = $request->input('phone_number');
        $client->address = $request->input('address');
        $client->save();

        $id = $client->id;
        Session()->put('msg','تم تسجيل العميل بنجاح');
        return redirect(route('clients.show', $id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clients = Client::where('id',$id)->get();
        return view('pages.clients.client_show',["clients"=>$clients]);
        // $clients = Client::find($id);
        // return view('pages.clients.client_show',['clients'=>$clients]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Client::where('id',$id)->get();
        return view('pages.clients.client_edit',["clients"=>$clients]);
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
        Client::where('id',$id)->update([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address')
        ]);
        Session()->put('msg','تم التعديل بنجاح');
        return redirect(route('clients.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients = Client::find($id);
        $clients->delete();
        Session()->put('msg','تم حذف العميل بنجاح');
        return redirect(route('clients.index'));
    }

    public function projects($clientid)
    {
        $projects = Projects::where('client_id',$clientid)->get();
        return view('pages.clients.client_projects',["projects"=>$projects]);
    }

    // public function search(Request $request)
    // {
    //     return $request->all();
    // }
}
