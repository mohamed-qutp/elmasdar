<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Request $request, $id)
    {
        $comment = new Comments();
        $comment->user_id = Auth::user()->id;
        $comment->task_id = $id;
        $comment->comment = $request->input('comment');
        $comment->save();
        return redirect()->back();
    }

    public function delete($id)
    {
        $comment = Comments::find($id);
        $comment->delete();
        Session()->put('msg','تم حذف التعليق بنجاح');
        return redirect()->back();
    }
}
