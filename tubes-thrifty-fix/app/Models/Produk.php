<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;  
    protected $fillable =['user_id',"img1","img2","img3","namaproduk","kategori","kondisi","deskripsiproduk","ukuranproduk","status","hargaproduk","stok"];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
} 
