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
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;


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
    public function tampilanAdmin(){
        $user = Auth::user();
        return view ("tampilanadmin.tampilanadmin",[
            'user' => $user
        ]);
    }
    public function tampilanDashboard(){
        $produks = Produk::all()->where('user_id','!=',Auth::user()->id);
        
        $kaos = Produk::all()->where('id_categories',1)->where('user_id','!=',Auth::user()->id);
        $celana = Produk::all()->where('id_categories',2)->where('user_id','!=',Auth::user()->id); 
        $kemeja = Produk::all ()->where('id_categories',3)->where('user_id','!=',Auth::user()->id);
        $jaket = Produk::all()->where('id_categories',4)->where('user_id','!=',Auth::user()->id);
        $sepatu= Produk::all()->where('id_categories',5)->where('user_id','!=',Auth::user()->id);
        $topi = Produk::all()->where('id_categories',6)->where('user_id','!=',Auth::user()->id);
        $tas = Produk::all()->where('id_categories',7)->where('user_id','!=',Auth::user()->id);

        
        $user = Auth::user();
        // return $produks;
        return view ("dashboard.dashboard", [
            'produks' => $produks,  
            'user' => $user,
            'kaos' => $kaos,
            'celana' => $celana,
            'kemeja' => $kemeja,
            'jaket' => $jaket,
            'sepatu' => $sepatu,
            'topi' => $topi,
            'tas' => $tas,

            'user' => $user 
        ]);
      
    }
    public function tampilanJualproduk(){
        $user = Auth::user();
        return view ("jual.jualproduk",[
            'user' => $user
        ]);
    }
    public function tampilanDaftarjual(){
        $user = Auth::user();
        return view ("daftarjual.daftarjual",[
            'user' => $user
        ]);
    }
    public function tampilanEditproduk(Produk $produk){
        $user = Auth::user();

        return view ("editproduk.editproduk",[
            'produk' => $produk,
            'user' => $user
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
        $user = Auth::user();
        return view ("preview.preview", [
            'produk' => $produk,
            'user' => $user
        ]);
    }

    public function processLogout(Request $request){
        Auth::logout();

        return redirect()->route('login');
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

    public function getAllUser()
    {
        $transactions = DB::table('users as u')
            ->select(
                'u.id as id',
                'u.fullname as fullname',
                'u.gender as gender',
                'u.phonenumber as phonenumber',
                'u.birthdate as birthdate',
                'u.email as email',
                'u.img as img',
                'u.id_role as id_role',
                'r.nama_role as nama_role'
                )
            ->join('role as r','r.id','=','id_role')
            ->orderBy('id', 'asc')
            ->get();


            return DataTables::of($transactions)
            ->addColumn('action', function($transaction) {
                $html = '
                <a class="btn btn-info mb-1" href="/show-transaction/1"><i class="fa fa-eye" aria-hidden="true"></i></a>

                ';

                return $html;
            })
            ->make(true);
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
            'id_role' => 2,
            'email' =>  $request->email,
            'birthdate' =>  $request->birthdate,
            'phonenumber' => $request->phonenumber,
            'gender' => $request->gender,
            'password' =>  bcrypt($request->password),
        ]);

        return redirect()->route('login');
    }

    public function deleteproduct(Produk $produk)
    {

        dd($produk);
        $produk->delete();
        return back();
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

    public function destroy($id)
    {       
        $produk = Produk::find($id);
        $produk->delete();
        return back();
    }
}
