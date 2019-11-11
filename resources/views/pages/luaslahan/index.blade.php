@extends('master')

@section('content')

<div class="main-content">
	<div class="container-fluid">
		<h3 class="page-title">Data Luas Lahan dan RTP</h3>
        @if ($message = Session::get('danger'))

		<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<i class="fa fa-check-circle"></i> Data Berhasil Dihapus!
		</div>
        @endif

		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<a href="{{route('tambah.lahan')}}" class="btn btn-success">Tambah Data</a>
					</div>
					<div class="panel-body">
						<table class="table table-bordered display nowrap" id="example" style="width:100%">
							<thead>
								<tr>
									<th>No.</th>
									<th>Desa</th>
									<th>Kecamatan</th>
									<th>Bulan</th>
									<th>Penyuluh</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
                                @php($no = 1)
                                @foreach ($lahans as $lahan)

								<tr>
									<td>{{$no++}}</td>
									<td>{{$lahan->desa}}</td>
									<td>{{$lahan->kecamatan}}</td>
									<td>{{$lahan->bulan}}</td>
									<td>{{$lahan->penyuluh}}</td>
									<td>
										<form action="{{route('lahan.delete', $lahan->id)}}" method="POST">
                                                {{ csrf_field() }} {{ method_field('DELETE') }}

											<button class="btn btn-danger" type="submit">
												<span class="lnr lnr-trash">
												</
												<span>
												</button>
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
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Cetak Data Tabel</h3>
						</div>
						<div class="panel-body">
							<h4></h4>
							<p>Rekapan data Luas Lahan & RTP berdasarkan Bulan</p>
							<br>
								<div class="col-md-12">
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
								</div>
								<br>
									<br>
										<div class="text-center">
                                            <button class="btn btn-primary" type="submit"><span class="lnr lnr-download"> </span> Unduh Data</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection
