<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;
    protected $table = "role_users";

    //for relation create this method
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users');
    }
}
