<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    // create a function for adding the role
    public function addRole()
    {
        $roles = [
            ["name" => "Administrotor"],
            ["name" => "Editor"],
            ["name" => "Author"],
            ["name" => "Contributer"],
            ["name" => "Subscriber"],
        ];
        Role::insert($roles);
        return "rules are created successfully!";
    }

    //create a function to add users
    public function addUser()
    {
        $user = new User();
        $user->name = "mahawahabbb";
        $user->email = "maha44@gamail.com";
        $user->password = encrypt('secret');
        $user->save();

        //add role id's here
        $roleids = [2, 3, 4];
        $user->roles()->attach($roleids);
        return 'Record has been created successfully!';
    }
    //create function to fetch all roles by user
    public function getAllRolesByUser($id)
    {
        $user = User::find($id);
        $roles = $user->roles;
        return $roles;
    }
    //create function to fetch all users by role
    public function getAllUsersByRole($id)
    {
        $role = Role::find($id);
        $user = $role->user;
        return $user;
    }
}
