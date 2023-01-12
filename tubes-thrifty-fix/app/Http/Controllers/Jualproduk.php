<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Jualproduk extends Controller
{
    public function store(Request $request){
        // dd($request->all());
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
    
        $product = Produk::create([
            'user_id' => Auth::id(),
            "namaproduk" => $request->namaproduk,
            "kategori" => $request->kategori,
            "kondisi" => $request->kondisi,
            "deskripsiproduk" => $request->deskripsiproduk,
            "ukuranproduk" => $request->ukuranproduk,
            "status" => $request->status ?? 'off',
            "hargaproduk" => $request->hargaproduk,
            "stok" => $request->stok
        ]);

        $img1 = $request->img1 ?? null;
        if($img1){
            $name_img1 = Str::random(5) . date('dmYhis');
            $extension = $img1->getClientOriginalExtension();

            $location_img1 = $img1 ? $name_img1 . '.' . $extension : null;

            $img1 ? $img1->storeAs('public/produk/', $location_img1) : '';
            $name_img1 = 'storage/produk/' . $location_img1;
            
            $product->update([
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
            
            $product->update([
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
            
            $product->update([
                'img3' => $name_img3
            ]);
        }

        return redirect()->route('daftarjual');
    }

    public function datatable(){
        return datatables()->of(Produk::query())
        ->addColumn('status', function($data){
            if($data->status == "off"){
                $status = '<div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Aktif</label>
                </div>';
            }else{
                $status = '<div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault">Aktif</label>
                </div>';
            }

            return $status;
        })
        ->rawColumns(['status'])
        ->make(true);
    }
}
