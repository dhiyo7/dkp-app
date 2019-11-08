@extends('master')

@section('content')

<div class="main-content">
	<div class="container-fluid">
		<h3 class="page-title">Data Produksi Benih</h3>
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
						<a href="{{route('tambah.benih')}}" class="btn btn-success">Tambah Data Benih</a>
					</div>
					<div class="panel-body">
						<table class="table table-bordered display nowrap" id="example" style="width:100%">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Desa</th>
									<th>Kecamatan</th>
									<th>Bulan</th>
									<th>Penyuluh</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
                                @php($no = 1)
                                @foreach ($benihs as $benih)

								<tr>
									<td>{{$no++}}</td>
									<td>{{$benih->name}}</td>
									<td>{{$benih->desa}}</td>
									<td>{{$benih->kecamatan}}</td>
									<td>{{$benih->bulan}}</td>
									<td>{{$benih->penyuluh}}</td>
									<td>
										<form action="{{route('benih.delete', $benih->id)}}" method="POST">
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
							<p>Print data banih berdasarkan Bulan dan Kecamatan</p>
							<br>
								<div class="col-md-6">
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
								<div class="col-md-6">
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
								</div>
								<br>
									<br>
										<div class="text-center">
											<a href="#" class="btn btn-primary">
												<span class="lnr lnr-printer"></span>Print Data
											</a>
										</div>
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
										<p>Print data benih berdasarkan Bulan</p>
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
														<a href="#" class="btn btn-primary">
															<span class="lnr lnr-printer"></span>Print Data
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
@endsection
