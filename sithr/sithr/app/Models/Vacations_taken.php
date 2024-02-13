<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacations_taken extends Model
{
    public $table = 'vacations_takens';
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
