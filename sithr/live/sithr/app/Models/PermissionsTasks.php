<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tasks;
use App\Models\User;
use App\Models\Permissions_taken;

class PermissionsTasks extends Model
{
    use HasFactory;
    
    public function permissions()
    {
        return $this->belongsTo(Permissions_taken::class,'permission_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function tasks()
    {
        return $this->belongsTo(Tasks::class,'task_id');
    }
}
