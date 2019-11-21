<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PelakuUsaha extends Model
{
    protected $guarded = [];

    // public function asset_pelaku_usahas(){
    //     return $this->hasMany(AssetPelakuUsaha::class, 'id_pelaku', 'id');
    // }

    // public function komoditas_pelaku_usahas(){
    //     return $this->hasMany(KomoditasPelakuUsaha::class, 'id_pelaku', 'id');
    // }

    // public function pengurus_pendataans(){
    //     return $this->hasMany(PengurusPendataan::class, 'id_pelaku', 'id');
    // }

    // public function produksi_per_bulans(){
    //     return $this->hasMany(ProduksiPerBulan::class, 'id_pelaku', 'id');
    // }

    // public function sumber_bahan_bakus(){
    //     return $this->hasMany(SumberBahanBaku::class, 'id_pelaku', 'id');
    // }
}
