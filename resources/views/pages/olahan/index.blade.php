@extends('master')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <h3 class="page-title">Data Pengolahan Ikan Dinas Perikanan</h3>
        @if ($message = Session::get('danger'))
            <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> Data Berhasil Dihapus!</div>
        @elseif ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> Data Berhasil Disimpan!</div>
        @endif

        {{-- <h4 class="panel-subtitle">Kabupaten Brebes</h4> --}}
        <form class="row" method="POST" action="{{route('tambah.olahan.post')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="col-md-12">
                        <div class="panel">
                                <div class="panel-heading">
                                        <h3 class="panel-title">Tambah Data Jenis Pengolahan</h3>
                                        {{-- <p class="panel-subtitle">Panel to display most important information</p> --}}
                                    </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                        <input type="text" name="jenis_olahan" class="form-control" placeholder="Masukkan Nama" autofocus required><br>
                                        {{-- <input type="number" name="nip" class="form-control" placeholder="Masukkan NIP" required><br> --}}
                                        {{-- <textarea type="text" name="desa" class="form-control" placeholder="Masukkan Desa" required></textarea><br> --}}
                                        <textarea type="text" name="keterangan" class="form-control" placeholder="Keterangan" required></textarea><br>
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
                                <h3 class="panel-title">Data Jenis Pengolahan Ikan</h3>
                                <p class="panel-subtitle">Dinas Perikanan Kabupaten Brebes</p>
                            </div>
                    <div class="panel-body">
                        <table class="table table-bordered display nowrap" id="example" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis Olahan</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($no = 1)
                                @foreach($olahans as $olahan)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$olahan->jenis_olahan}}</td>
                                    <td>{{$olahan->keterangan}}</td>
                                    <td>
                                        <form action="{{route('olahan.delete', $olahan->id)}}" method="POST">
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
