<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function login(){
        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return redirect('adminDashboard');
            }else{
                return redirect('home');
            }
        }else{
            return view('Login');
        }
    }

    public function actionLogin(Request $request){

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if(Auth::attempt($data)){
            $user = Auth::user();

            if($user->active){
                if($user->role == 'admin'){
                    return redirect('adminDashboard');
                }else if($user->role == 'user'){
                    return redirect('home');
                }else {
                    Session::flash('error', 'Akun anda belum ditentukan rolenya');
                    return redirect('/');
                }
                
            }else{
                Auth::logout();
                Session::flash('error', 'Akun anda belum diverifikasi. Silahkan cek email anda.');
                return redirect('/');
            }
        }else{
            Session::flash('error', 'Email atau Password salah');
            return redirect('/');
        }
    }

    public function actionLogout () {
        Auth::logout();
        return redirect('/');
    }
}

