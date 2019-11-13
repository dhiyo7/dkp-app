@extends('master') @section('content')
<div class="main-content">
    <form class="container-fluid" action="{{route('tambah.pendataan.perorangan.post')}}" method="POST" enctype="multipart/form-data">
        <h3 class="page-title">Input Pelaku Usaha (Perorangan)</h3> @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> Data Berhasil Disimpan!</div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Identitas Pelaku Usaha</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <input type="hidden" name="jenis" class="form-control" placeholder="Masukkan Desa" value="0">
                            <input type="text" name="nama_pelaku" class="form-control" placeholder="Masukkan Nama Pelaku Usaha" autofocus>
                            <br>
                            <select class="form-control" name="kecamatan">
                                <option value="" disabled selected>--- Pilih Kategori ---</option>
                                <option value="Banjarharjo">KUB</option>
                                <option value="Bantarkawung">POKLAHSAR</option>
                                <option value="Brebes">POKDAKAN</option>
                                <option value="Bumiayu">KUGAR</option>
                            </select>
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
                            <select class="form-control" name="bulan">
                                <option value="" disabled selected>--- Pilih Penyuluh ---</option>
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
                            <input type="number" name="tahun_berdiri" class="form-control" placeholder="Jumlah Pekerja">
                            <br>
                            <input type="number" name="tahun_berdiri" class="form-control" placeholder="Status Pekerja">
                            <br>
                            <input type="number" name="tahun_berdiri" class="form-control" placeholder="Pemasaran">
                            <br>
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="tahun_berdiri" class="form-control" placeholder="Masukkan Tahun Berdiri">
                            <br>
                            <input type="text" name="legalitas" class="form-control" placeholder="Masukkan Legalitas Usaha">
                            <br>
                            <input type="number" name="no_hp" class="form-control" placeholder="Masukkan No. Telp">
                            <br>
                            <input type="number" name="nil_nila" class="form-control" placeholder="Masukkan Jumlah Anggota Kelompok">
                            <br>
                            <input type="text" name="pro_kaper" class="form-control" placeholder="Masukkan Kelas Kelompok">
                            <br>
                            <input type="text" name="pro_kaper" class="form-control" placeholder="Masukkan Jumlah Produksi(Kg)/Bulan">
                            <br>
                            <input type="text" name="pro_kaper" class="form-control" placeholder="Masukkan Harga Produk(Kg)">
                            <br>
                            <input type="text" name="pro_kaper" class="form-control" placeholder="Masukkan Nilai Produksi(Rp)">
                            <br>
                        </div>
                        <div class="col-md-12">
                            <textarea placeholder="Masukkan Alamat" class="orm-control col-md-12" name="alamat"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pengurus Kelompok Usaha</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <input type="text" name="nama_pelaku" class="form-control" placeholder="Masukkan Nama Ketua">
                            <br>
                            <input type="text" name="nama_pelaku" class="form-control" placeholder="Masukkan Nama Sekretaris">
                            <br>
                            <input type="text" name="nama_pelaku" class="form-control" placeholder="Masukkan Nama Bendahara">
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Komoditas Pelaku Usaha</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <table class="table" id="dynamicKomoditas">
                                <tr>
                                    <th>Komoditas Pelaku Usaha</th>
                                    <th>Aksi</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="addmore[0][jenis_komoditas]" placeholder="Masukkan Jenis Komoditas" class="form-control" />
                                    </td>
                                    <td>
                                        <button type="button" name="add" id="addKomoditas" class="btn btn-success">Tambah</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Asset Usaha</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table" id="dynamicAsset">
                            <tr>
                                <th>Sarana/Prasarana Usaha</th>
                                <th>Jumlah (Unit/pcs)</th>
                                <th>Status</th>
                                <th>Nilai (Rp)</th>
                                <th>Aksi</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="addmore[0][sarana]" placeholder="Masukkan Sarana" class="form-control" />
                                </td>
                                <td>
                                    <input type="text" name="addmore[0][jml_asset]" placeholder="Masukkan Jumlah Sarana" class="form-control" />
                                </td>
                                <td>
                                    <input type="text" name="addmore[0][status]" placeholder="Masukkan Status" class="form-control" />
                                </td>
                                <td>
                                    <input type="text" name="addmore[0][nil_asset]" placeholder="Masukkan Nilai Sarana" class="form-control" />
                                </td>
                                <td>
                                    <button type="button" name="add" id="addAsset" class="btn btn-success">Tambah</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sumber Bahan Baku/Bibit atau Benih (Pokdakan/Poklahsar)</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Jenis Bahan Baku Utama" />
                            <br>
                            <input class="form-control" placeholder="Asal Bahan Baku" />
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Jumlah Kebutuhan Bahan Baku" />
                            <br>
                            <input class="form-control" placeholder="Harga per pcs/ekor/kg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Biaya Produksi/Bulan</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table" id="dynamicProduksi">
                            <tr>
                                <th>Bahan Baku Utama dan Tambahan</th>
                                <th>Nilak (Rp)</th>
                                <th>Aksi</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="addmore[0][bahan_baku_utama]" placeholder="Masukkan Bahan Baku Utama dan Tambahan" class="form-control" />
                                </td>
                                <td>
                                    <input type="text" name="addmore[0][nilai_bahan_baku_utama]" placeholder="Masukkan Nilai" class="form-control" />
                                </td>
                                <td>
                                    <button type="button" name="add" id="addProduksi" class="btn btn-success">Tambah</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nilai Tukar Pembudidayaikan Nelayan/Petani Garam</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Pendapatan per Bulan / Tahun (Rp)" />
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Pengeluaran (Biaya konsumsi harian) per bulan/tahun (Rp)" />
                        </div>
                    </div>
                </div>
            </div <div class="row">
            <div class="col-md-12">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bantuan Yang Pernah Diterima</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Nama Bantuan" />
                            <br>
                            <input class="form-control" placeholder="Sumber Bantuan" />
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Tahun Peroleh" />
                            <br>
                            <input class="form-control" placeholder="Keterangan" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            {{-- <a href="" class="btn btn-success">Simpan Data</a> --}}
            <button type="submit" class="btn btn-success">Simpan Data</button><br>
        </div>
</div>

</form>
</div>
@endsection