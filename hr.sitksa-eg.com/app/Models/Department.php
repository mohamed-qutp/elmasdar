<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use App\Models\Projects;

class Department extends Model
{
    use HasFactory; 
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    } 
}