@extends('master') @section('content')

<div class="main-content">
    <div class="container-fluid">
        <h3 class="page-title">Input Data Luas Lahan dan RTP</h3> @if ($message = Session::get('success'))

        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <i class="fa fa-check-circle"></i> Data Berhasil Disimpan!
        </div>
        @endif

        <form class="row" action="{{route('tambah.lahan.post')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <input name="desa" type="text" class="form-control" placeholder="Masukkan Desa" autofocus required>
                            <br>
                            <select class="form-control" name="kecamatan" required>
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
                            <select class="form-control" name="bulan" required>
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
                            <select class="form-control" name="penyuluh" required>
                                <option value="cheese" disabled selected>--- Pilih Penyuluh ---</option>
                                @foreach ($penyuluh as $penyuluhs)

                                <option value="{{$penyuluhs->name}}">{{$penyuluhs->name}}</option>
                                @endforeach

                            </select>
                            <br>
                            <input name="jml_rtp_tambak_sederhana" type="number" class="form-control" placeholder="Masukkan Jumlah RTP Tambak Sederhana">
                            <br>
                            <input name="jml_rtp_tambak_semi" type="number" class="form-control" placeholder="Masukkan Jumlah RTP Tambak Semi">
                            <br>
                            <input name="jml_rtp_tambak_intensif" type="number" class="form-control" placeholder="Masukkan Jumlah RTP Tambak Intensif">
                            <br>
                        </div>
                        <div class="col-md-6">
                            <input name="luas_tambak_sederhana" type="number" class="form-control" placeholder="Masukkan Luas Tambak Sederhana">
                            <br>
                            <input name="luas_tambak_semi" type="number" class="form-control" placeholder="Masukkan Luas Tambak Semi">
                            <br>
                            <input name="luas_tambak_intensif" type="number" class="form-control" placeholder="Masukkan Luas Tambak Intensif">
                            <br>
                            <input name="jml_rtp_kolam" type="number" class="form-control" placeholder="Masukkan Jumlah RTP Kolam">
                            <br>
                            <input name="luas_kolam" type="number" class="form-control" placeholder="Masukkan Luas Kolam">
                            <br>
                            <input name="jml_rtp_rumput_laut" type="number" class="form-control" placeholder="Masukkan Jumlah RTP Rumput Laut">
                            <br>
                            <input name="jml_lahan_rumput_laut" type="number" class="form-control" placeholder="Masukkan Jumlah Lahan Rumput Laut">
                            <br>
                        </div>
                        <br>
                        <br>
                        <div class="text-center">
                            {{--
                            <a href="#" class="btn btn-success">Simpan Data</a> --}}

                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
