<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    //

    protected function getRoleUsers(){
        $users_role = DB::table('users')
        ->select('users.name,users.email,role.role')
        ->join('role', 'users.role_id', '=', 'role.id')
        ->get();
        return $users_role;
    }
}
