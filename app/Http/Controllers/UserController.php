<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    protected  function store(Request $request){
        $user = new User();
        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->password= \Hash::make($request->input('password'));
        $user->save();
     }

     protected  function update($id,Request $request){
        $user=new User();
        $user=$user->findOrFail($id);
        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->password= \Hash::make($request->input('password'));
        $user->save();
     }

     protected function delete($id){
        $user=new User();
        $user=$user->findOrFail($id);
        $user->delete();
    }

    protected function getAll(){
        $user = new User; 
        return $user->all();
    }

    protected function getUserById($id){
        $user=new User();
        $user=$usuario->findOrFail($id);
        return $user;
    }
}
