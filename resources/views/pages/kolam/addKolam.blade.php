@extends('master') @section('content')
<div class="main-content">
    <div class="container-fluid">
        <h3 class="page-title">Input Data Kolam</h3> @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> Data Berhasil Disimpan!</div>
        @endif
        <form class="row" action="{{route('tambah.kolam.post')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <input type="text" name="desa" class="form-control" placeholder="Masukkan Desa" autofocus>
                            <br>
                            <select class="form-control" name="kecamatan">
                                <option value="" disabled selected>--- Pilih Kecamatan ---</option>
                                <option value="Banjarharjo">Banjarharjo</option>
                                <option value="Bantarkawung">Bantarkawung</option>
                                <option value="Brebes">Brebes</option>
                                <option value="Bumiayu">Bumiayu</option>
                                <option value="Bulakamba">Bulakamba</option>
                                <option value="Jatibarang">Jatibarang</option>
                                <option value="Kersana">Kersana</option>
                                <option value="Ketanggungan">Ketanggungan</option>
                                <option value="Larangan">Larangan</option>
                                <option value="Losari">Losari</option>
                                <option value="Paguyangan">Paguyangan</option>
                                <option value="Salem">Salem</option>
                                <option value="Sirampog">Sirampog</option>
                                <option value="Songgom">Songgom</option>
                                <option value="Tanjung">Tanjung</option>
                                <option value="Tonjong">Tonjong</option>
                                <option value="Wanasari">Wanasari</option>
                            </select>
                            <br>
                            <select class="form-control" name="bulan">
                                <option value="" disabled selected>--- Pilih Bulan ---</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                            <br>
                            <select class="form-control" name="penyuluh">
                                <option value="cheese" disabled selected>--- Pilih Penyuluh ---</option>
                                @foreach ($penyuluh as $penyuluhs)
                                <option value="{{$penyuluhs->name}}">{{$penyuluhs->name}}</option>
                                @endforeach
                            </select>
                            <br>
                            <input type="number" name="pro_lele" class="form-control" placeholder="Masukkan Produksi Lele">
                            <br>
                            <input type="number" name="nil_lele" class="form-control" placeholder="Masukkan Nilai Produksi Lele">
                            <br>
                            <input type="number" name="pro_nila" class="form-control" placeholder="Masukkan Produksi Nila">
                            <br>
                            <input type="number" name="nil_nila" class="form-control" placeholder="Masukkan Nilai Produksi Nila">
                            <br>
                            <input type="number" name="pro_kaper" class="form-control" placeholder="Masukkan Produksi Kaper">
                            <br>
                            <input type="number" name="nil_kaper" class="form-control" placeholder="Masukkan Nilai Produksi Kaper">
                            <br>
                            <input type="number" name="pro_nilem" class="form-control" placeholder="Masukkan Produksi Nilem">
                            <br>
                            <input type="number" name="nil_nilem" class="form-control" placeholder="Masukkan Nilai Produksi Nilem">
                            <br>
                            <input type="number" name="pro_gurame" class="form-control" placeholder="Masukkan Produksi Gurameh">
                            <br>
                            <input type="number" name="nil_gurame" class="form-control" placeholder="Masukkan Nilai Produksi Gurameh">
                            <br>

                        </div>
                        <div class="col-md-6">
                            <input type="number" name="pro_tawes" class="form-control" placeholder="Masukkan Produksi Tawes">
                            <br>
                            <input type="number" name="nil_tawes" class="form-control" placeholder="Masukkan Nilai Produksi Tawes">
                            <br>
                            <input type="number" name="pro_mujair" class="form-control" placeholder="Masukkan Produksi Mujair">
                            <br>
                            <input type="number" name="nil_mujair" class="form-control" placeholder="Masukkan Nilai Produksi Mujair">
                            <br>
                            <input type="number" name="pro_bawal" class="form-control" placeholder="Masukkan Produksi Bawal">
                            <br>
                            <input type="number" name="nil_bawal" class="form-control" placeholder="Masukkan Nilai Produksi Bawal">
                            <br>
                            <input type="number" name="pro_belut" class="form-control" placeholder="Masukkan Produksi Belut">
                            <br>
                            <input type="number" name="nil_belut" class="form-control" placeholder="Masukkan Nilai Produksi Belut">
                            <br>
                            <input type="number" name="pro_udang_galah" class="form-control" placeholder="Masukkan Produksi Udang Galah">
                            <br>
                            <input type="number" name="nil_udang_galah" class="form-control" placeholder="Masukkan Nilai Produksi Udang Galah">
                            <br>
                            <input type="number" name="pro_tambakan" class="form-control" placeholder="Masukkan Produksi Tambakan">
                            <br>
                            <input type="number" name="nil_tambakan" class="form-control" placeholder="Masukkan Nilai Produksi Tambakan">
                            <br>
                            <input type="number" name="pro_patin" class="form-control" placeholder="Masukkan Produksi Patin">
                            <br>
                            <input type="number" name="nil_patin" class="form-control" placeholder="Masukkan Nilai Produksi Patin">
                            <br>

                        </div>
                        <br>
                        <br>
                        <div class="text-center">
                            {{-- <a href="" class="btn btn-success">Simpan Data</a> --}}
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
