<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


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
        $produks = Produk::all();
        // return $produks;

        return view ("dashboard.dashboard", [
            'produks' => $produks
        ]);
    }
    public function tampilanJualproduk(){
        return view ("jual.jualproduk");
    }
    public function tampilanDaftarjual(){
        return view ("daftarjual.daftarjual");
    }
    public function tampilanEditproduk(Produk $produk){

        return view ("editproduk.editproduk",[
            'produk' => $produk
        ]);
    }

    public function editproduk(Request $request, Produk $produk)
    {
        $request->validate([
            'namaproduk' => 'required',
            'kategori' => 'required',
            'kondisi' => 'required',
            'deskripsiproduk' => 'required',
            'ukuranproduk' => 'required',
            'status' => 'nullable',
            'hargaproduk' => 'required',
            'stok' => 'required',
            'img1' => 'nullable|image',
            'img2' => 'nullable|image',
            'img3' => 'nullable|image',
        ]);

        $img1 = $request->img1 ?? null;
        if($img1){
            $name_img1 = Str::random(5) . date('dmYhis');
            $extension = $img1->getClientOriginalExtension();

            $location_img1 = $img1 ? $name_img1 . '.' . $extension : null;

            if($produk->img1){
                $url = str_replace("storage/","public/", $produk->img1);
                Storage::delete($url);
            }

            $img1 ? $img1->storeAs('public/produk/', $location_img1) : '';
            $name_img1 = 'storage/produk/' . $location_img1;

            $produk->update([
                'img1' => $name_img1
            ]);
        }

        $img2 = $request->img2 ?? null;
        if($img2){
            $name_img2 = Str::random(5) . date('dmYhis');
            $extension = $img2->getClientOriginalExtension();

            $location_img2 = $img2 ? $name_img2 . '.' . $extension : null;

            $img2 ? $img2->storeAs('public/produk/', $location_img2) : '';
            $name_img2 = 'storage/produk/' . $location_img2;

            if($produk->img2){
                $url = str_replace("storage/","public/",$produk->img2);
                Storage::delete($url);
            }

            $produk->update([
                'img2' => $name_img2
            ]);
        }

        $img3 = $request->img3 ?? null;
        if($img3){
            $name_img3 = Str::random(5) . date('dmYhis');
            $extension = $img3->getClientOriginalExtension();

            $location_img3 = $img3 ? $name_img3 . '.' . $extension : null;

            $img3 ? $img3->storeAs('public/produk/', $location_img3) : '';
            $name_img3 = 'storage/produk/' . $location_img3;

            if($produk->img3){
                $url = str_replace("storage/","public/",$produk->img3);
                Storage::delete($url);
            }
            
            $produk->update([
                'img3' => $name_img3
            ]);
        }

        $produk->update([
            "namaproduk" => $request->namaproduk,
            "kategori" => $request->kategori,
            "kondisi" => $request->kondisi,
            "deskripsiproduk" => $request->deskripsiproduk,
            "ukuranproduk" => $request->ukuranproduk,
            "status" => $request->status ?? 'off',
            "hargaproduk" => $request->hargaproduk,
            "stok" => $request->stok,
        ]);

        return redirect()->route('editproduk', $produk->id);
    }

    public function tampilanEditprofile(){
        $user = Auth::user();
        return view ("editprofile.editprofile", [
            'user' => $user
        ]);
    }
    public function tampilanPreview(Produk $produk){

        return view ("preview.preview", [
            'produk' => $produk
        ]);
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

    public function Editprofile(Request $request){
        // dd($request->all());
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'birthdate' => 'required',
            'phonenumber' => 'required',
            'gender' => 'required',
            'password' => 'nullable',
            'img' => 'nullable|image',
        ]);

        Auth::user()->update([
            'fullname' => $request->fullname,
            'email' =>  $request->email,
            'birthdate' =>  $request->birthdate,
            'phonenumber' => $request->phonenumber,
            'gender' => $request->gender,
        ]);

        if($request->password){
            Auth::user()->update([
                'password' => $request->password
            ]);
        }

        $img = $request->img ?? null;
        if($img){
            $name_img = Str::random(5) . date('dmYhis');
            $extension = $img->getClientOriginalExtension();

            $location_img = $img ? $name_img . '.' . $extension : null;

            $img ? $img->storeAs('public/user/', $location_img) : '';
            $name_img = 'storage/user/' . $location_img;
            
            Auth::user()->update([
                'img' => $name_img
            ]);
        }

        return redirect()->route('editprofile');
    }
}
