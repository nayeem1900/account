<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
class users extends Controller
{
    //

    function userlist()

    {
        $user=User::all();
        return view('userlist',['user'=>$user]);
    }


   public function create()

    {

        return view('create');
    }

    public function  loginsubmit (Request $req)

    {

         User::select('*')->where(
            [

            ['email','=',$req->email],
            ['password','=',$req->password]
                ]
        )->get();
        $req->session()->put('logData',[$req->input()]);
        return redirect('/userlist');
   // return User::all(); show all user

   // print_r($req->input());
    }

    public function createsubmit(Request $req)
    {
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
       $result= $user->save();
        if ($result){
            return redirect('/userlist');
        }


    }


}
