@extends('master')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <h3 class="page-title">Data Penyuluh Dinas Perikanan</h3>
        {{-- <h4 class="panel-subtitle">Kabupaten Brebes</h4> --}}
        <form class="row" method="POST" action="{{route('penyuluh.post')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="col-md-12">
                        <div class="panel">
                                <div class="panel-heading">
                                        <h3 class="panel-title">Tambah Data Penyuluh</h3>
                                        {{-- <p class="panel-subtitle">Panel to display most important information</p> --}}
                                    </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                        <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" autofocus required><br>
                                        <input type="number" name="nip" class="form-control" placeholder="Masukkan NIP"><br>
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
                                        </select><br>
                                        <textarea type="text" name="desa" class="form-control" placeholder="Masukkan Desa"></textarea><br>
                                        <textarea type="text" name="keterangan" class="form-control" placeholder="Keterangan"></textarea><br>
                                </div>
                                <br>
                                <br>
                                <div class="text-center">
                                    {{-- <a href="#" class="btn btn-success">Simpan Data</a> --}}
                                    <button class="btn btn-success">Simpan Data</button>
                                </div>
                            </div>
                        </div>
                </div>
        </form>

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                        <div class="panel-heading">
                                <h3 class="panel-title">Data Penyuluh</h3>
                                <p class="panel-subtitle">Dinas Perikanan Kabupaten Brebes</p>
                            </div>
                    <div class="panel-body">
                        <table class="table table-bordered display nowrap" id="example" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Kecamatan</th>
                                    <th>Desa</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($no = 1)
                                @foreach($penyuluh as $penyuluhs)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$penyuluhs->name}}</td>
                                    <td>{{$penyuluhs->nip}}</td>
                                    <td>{{$penyuluhs->kecamatan}}</td>
                                    <td>{{$penyuluhs->desa}}</td>
                                    <td>{{$penyuluhs->keterangan}}</td>
                                    <td>
                                        <form action="{{route('penyuluh.delete', $penyuluhs->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger" type="submit"><span class="lnr lnr-trash"></<span></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
