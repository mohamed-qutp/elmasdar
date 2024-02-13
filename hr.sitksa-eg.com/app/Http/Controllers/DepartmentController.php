<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;

class DepartmentController extends LayoutController
{
    public function __construct()
    {
        $this->middleware('admin');
        parent::__construct();
    }
    // function to get other users tasks
    public function index()
    {
        $departments = Department::orderBy('id','asc')->paginate(20);        
        return view('pages.departments.departments',compact('departments'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.departments.adddepartment');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department();
        $department->name = $request->input('name');        
        $department->save();
        $id = $department->id;        
        Session()->put('msg','تم اضافة قسم جديد بنجاح');
        return redirect(route('departments.show', $id));
    }
    public function show($id)
    {
        $department = Department::where('id',$id)->first();
        $department_leader = User::where('id',$department->leader_id)->first();  
        return view('pages.departments.department_show',compact('department','department_leader'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function edit($id)
    {
        $department = Department::where('id',$id)->first();        
        return view('pages.departments.departmentedit',compact('department'));
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
        Department::where('id',$id)->update([
            'name' => $request->input('name'),
            'leader_id'=> $request->input('leader_id')    
        ]);
        Session()->put('msg','تم التعديل بنجاح');
        return redirect(route('departments.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();
        Session()->put('msg','تم حذف القسم بنجاح');
        return redirect(route('departments.index'));
    } 

  
}
