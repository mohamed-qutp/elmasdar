<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use App\Models\User;
use App\Models\Projects;
use App\Models\Comments;
use Illuminate\Http\Request;

class TaskController extends LayoutController
{
    public function __construct()
    {
        parent::__construct();
    }
    // function to get other users tasks
    public function index($userid)
    {
        $tasks = Tasks::where('assigned_to',$userid)->with('users')->get();
        // return $tasks;
        // $users = User::where('id',$userid)->with('tasks')->get();
        // $user=$users[0];
        // return $users;
    return view('pages.tasks.user_tasks',['tasks'=>$tasks]);
    }

    public function authTasks()
    {
        $tasks = Tasks::where('assigned_to',auth()->user()->id)->with('users')->get();
        $users = User::all(); 
        $projects = Projects::all();
        return view('pages.tasks.own_tasks',['tasks'=>$tasks, 'users'=>$users, 'projects'=>$projects]);
    }

    public function showTaskDetails($taskid)
    {
        $task = Tasks::where('id',$taskid)->with('users')->with('userTask')->with('projects')->get();
        $comments = Comments::where('task_id',$taskid)->orderBy('id','DESC')->with('users')->with('tasks')->get();
        return view('pages.tasks.user_tasks_show',['task'=>$task,'comments'=>$comments]);
    }

    public function store(Request $request)
    {
        $task = new Tasks();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->created_by = auth()->user()->id;
        $task->assigned_to = $request->input('assigned_to');
        $task->project_id = $request->input('projects');
        $task->from = $request->input('from');
        $task->to = $request->input('to');
        $task->save();
        // get last inserted id
        $id = $task->id;
        Session()->put('msg', 'تم انشاء المهمة بنجاح');
        return redirect(route('user_tasks_show', $id));
    }

    public function statusUpdate($taskid)
    {
        Tasks::where('id',$taskid)->update([
            'done' => '1',
        ]);
        Session()->put('msg', 'تم تغيير الحالة بنجاح');
        return redirect()->back();
    }
}
