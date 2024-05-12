<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function auth(Request $req) {
        // $u = User::where([
        //     ['email', $req->em],
        //     ['password', $req->pwd],
        // ])->first();

        // if (isset($u)) {
        //     session()->put('email', $u->email);
        //     session()->put('name', $u->name);
        //     return "<script>
        //     alert('Welcome, " . session('name') . "');
        //     location.href='/product';
        //     </script>";
        // }

        // return redirect('/login')->with('msg', 'Email atau password salah!');

        if (Auth::attempt(['email'=>$req->em, 'password'=>$req->pwd])) {
            return redirect('/product');
        }
        return redirect('/login')->with('msg', 'Email atau password salah!');
    }
}
