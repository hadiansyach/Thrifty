<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function tampilanLogin(){
        return view ("login.auth.index");
    }
    public function tampilanRegister(){
        return view ("login.auth.register");
    }
    public function tampilanRegister2(Request $request){
        return view ("login.auth.register2",[
            'request' => $request
        ]);
    }
    public function tampilanDashboard(){
        return view ("Dashboard.dashboard");
    }
    public function tampilanJualproduk(){
        return view ("Jual.jualproduk");
    }
    public function tampilanDaftarjual(){
        return view ("Daftarjual.daftarjual");
    }
    public function tampilanEditproduk(){
        return view ("Editproduk.editproduk");
    }


    public function processLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        try{
            $credentials = Arr::only($request->all(), ['email', 'password']);

            if(!Auth::attempt($credentials)){
                throw abort(422, 'salah email atau password');
            }

            return redirect()->route('dashboard');
        }catch(Exception $e){
            return back();
        }
    }

    public function processRegister(Request $request){
        // dd($request->all());
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'birthdate' => 'required',
            'phonenumber' => 'required',
            'gender' => 'required',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'fullname' => $request->fullname,
            'email' =>  $request->email,
            'birthdate' =>  $request->birthdate,
            'phonenumber' => $request->phonenumber,
            'gender' => $request->gender,
            'password' =>  bcrypt($request->password),
        ]);

        return redirect()->route('login');
    }
}
