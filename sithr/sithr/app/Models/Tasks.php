<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Projects;

class Tasks extends Model
{
    use HasFactory;
   


    public function users()
    {
        return $this->belongsTo(User::class,'created_by');
    }

    public function userTask()
    {
        return $this->belongsTo(User::class,'assigned_to');
    }

    public function projects()
    {
        return $this->belongsTo(Projects::class,'project_id');
    }
}
