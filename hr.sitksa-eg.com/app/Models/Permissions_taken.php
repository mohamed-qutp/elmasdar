<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Permissions_taken extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class,'accepted_by');
    }

    public function employee()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
