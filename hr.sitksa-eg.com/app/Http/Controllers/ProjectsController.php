<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Client;


class ProjectsController extends LayoutController
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
        $projects = Projects::orderBy('id','asc')->paginate(5);
        return view('pages.projects.project_index')->with('projects',$projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('pages.projects.project_create',['clients'=>$clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projects = new Projects();
        $projects->name = $request->input('name');
        $projects->client_id = $request->input('client');
        $projects->save();

        $id = $projects->id;
        Session()->put('msg', 'تم تسجيل المشروع بنجاح');
        return redirect(route('projects.show', $id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects = Projects::where('id',$id)->get();
        return view('pages.projects.project_show',["projects"=>$projects]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = Projects::where('id',$id)->get();
        $clients = Client::all();
        return view('pages.projects.project_edit',["projects"=>$projects, "clients"=>$clients]);
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
        Projects::where('id',$id)->update([
            'name' => $request->input('name'),
            'client_id' => $request->input('client')
        ]);
        Session()->put('msg', 'تم التعديل بنجاح');
        return redirect(route('projects.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Projects::find($id);
        $projects->delete();
        Session()->put('msg','تم حذف المشروع بنجاح');
        return redirect(route('projects.index'));
    }
}
