@extends('master') @section('content')
<div class="main-content">
    <div class="container-fluid">
        <h3 class="page-title">Data Pelaku Usaha (Kelompok)</h3>
        @if ($message = Session::get('danger'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> Data Berhasil Dihapus!</div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <a href="{{route('tambah.pendataan.kelompok')}}" class="btn btn-success">Tambah Pelaku Usaha</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered display nowrap" id="example" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pelaku Usaha</th>
                                    <th>Alamat</th>
                                    <th>Tahun Berdiri</th>
                                    <th>No. HP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>POKLAHSAR SUMBER IKAN</td>
                                    <td>RT 007/003 Dukuh Kali Kamal Desa Kedunguter</td>
                                    <td>2017</td>
                                    <td>0819-1149-0734</td>
                                    <td>
                                        <form action="" method="POST">
                                            {{-- {{ csrf_field() }} {{ method_field('DELETE') }} --}}
                                            <button class="btn btn-danger btn-sm" type="submit"><span class="lnr lnr-trash"></<span></button>
                                        </form>
                                         <a href="http://" class="btn btn-warning btn-sm"><span class="lnr lnr-pencil"></<span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
@endsection