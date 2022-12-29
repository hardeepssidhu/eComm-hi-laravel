<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class ecommController extends Controller
{
    public function create(Request $request)
    {
        $post = new users;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->password = $request->password;
        $post->save();
        return redirect()->back();

        /*echo "<pre>";
        print_r($request->all());*/
    }

    public function login(Request $req)
    {
        $user= users::where(['email'=>$req->email])->first();
        /*return $req->password;*/

        if($user->password === $req->password)
        {
            $req->session()->put('user', $user);
            return redirect('/product');
        }
        else
        {

            return 'Login & Password Not Matched...';
        }



    }


}
