<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    use HasFactory;
    // Panggil nama table
    protected $table ='jenis_produk';

    // Panggil kolom yang ada di table (sesuai dengan ada di dalam table)
    protected $fillable =['nama'];

    // Penanda atau pemanggilan class produk untuk relasi one to many many
    public function produk(){
        return $this->hasMany(Produk::class);
    }
}
