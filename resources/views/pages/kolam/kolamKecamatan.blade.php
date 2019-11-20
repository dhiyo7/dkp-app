<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

    <h2 class="text-center">Dinas Perikanan</h2>
    <p class="text-center">Kabupaten Brebes</p>
    <p class="text-sm-left">Data Produksi Kolam 2019</p>
    {{-- <p class="text-sm-left">Nama Penyuluh : {{$data->penyuluh}}</p>
    <p class="text-sm-left">Kecamatan : {{$data->kecamatan}}</p>
    {{-- <p class="text-sm-left">Wilayah Kerja : {{$data[0]->wilayah}}</p> --}}
    {{-- <p class="text-sm-left">Bulan : {{$data->bulan}}</p> --}}
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                        <td style="text-align: center; font-size:10px" rowspan="2">No</td>
                        <td style="text-align: center; font-size:10px" colspan="2" rowspan="2">Desa</td>
                        <td style="text-align: center; font-size:10px" colspan="2">Lele</td>
                        <td style="text-align: center; font-size:10px" colspan="2">Nila</td>
                        <td style="text-align: center; font-size:10px" colspan="2">Kaper Mas</td>
                        <td style="text-align: center; font-size:10px" colspan="2">Nilem</td>
                        <td style="text-align: center; font-size:10px" colspan="2">Gurameh</td>
                        <td style="text-align: center; font-size:10px" colspan="2">Tawes</td>
                        <td style="text-align: center; font-size:10px" colspan="2">Mujair</td>
                        <td style="text-align: center; font-size:10px" colspan="2">Bawal</td>
                        <td style="text-align: center; font-size:10px" colspan="2">Belut</td>
                        <td style="text-align: center; font-size:10px" colspan="2">Udang Galah</td>
                        <td style="text-align: center; font-size:10px" colspan="2">Tambakan</td>
                        <td style="text-align: center; font-size:10px" colspan="2">Patin</td>
                        <td style="text-align: center; font-size:10px" colspan="2">Jumlah</td>
                </tr>
                <tr>
                        <td style="text-align: center; font-size:10px">Produski (Kg)</td>
                        <td style="text-align: center; font-size:10px">Nilai (Rp)</td>
                        <td style="text-align: center; font-size:10px">Produski (Kg)</td>
                        <td style="text-align: center; font-size:10px">Nilai (Rp)</td>
                        <td style="text-align: center; font-size:10px">Produski (Kg)</td>
                        <td style="text-align: center; font-size:10px">Nilai (Rp)</td>
                        <td style="text-align: center; font-size:10px">Produski (Kg)</td>
                        <td style="text-align: center; font-size:10px">Nilai (Rp)</td>
                        <td style="text-align: center; font-size:10px">Produski (Kg)</td>
                        <td style="text-align: center; font-size:10px">Nilai (Rp)</td>
                        <td style="text-align: center; font-size:10px">Produski (Kg)</td>
                        <td style="text-align: center; font-size:10px">Nilai (Rp)</td>
                        <td style="text-align: center; font-size:10px">Produski (Kg)</td>
                        <td style="text-align: center; font-size:10px">Nilai (Rp)</td>
                        <td style="text-align: center; font-size:10px">Produski (Kg)</td>
                        <td style="text-align: center; font-size:10px">Nilai (Rp)</td>
                        <td style="text-align: center; font-size:10px">Produski (Kg)</td>
                        <td style="text-align: center; font-size:10px">Nilai (Rp)</td>
                        <td style="text-align: center; font-size:10px">Produski (Kg)</td>
                        <td style="text-align: center; font-size:10px">Nilai (Rp)</td>
                        <td style="text-align: center; font-size:10px">Produski (Kg)</td>
                        <td style="text-align: center; font-size:10px">Nilai (Rp)</td>
                        <td style="text-align: center; font-size:10px">Produski (Kg)</td>
                        <td style="text-align: center; font-size:10px">Nilai (Rp)</td>
                        <td style="text-align: center; font-size:10px">Produski (Kg)</td>
                        <td style="text-align: center; font-size:10px">Nilai (Rp)</td>
                </tr>
            </thead>
            <tbody>
                @php($no = 1) @foreach ($data as $dat)
                @php($jml_produksi = $dat->pro_lele+$dat->pro_nila+$dat->pro_kaper+
                    $dat->pro_nilem+$dat->pro_gurame+$dat->pro_tawes+$dat->pro_mujair+
                    $dat->pro_bawal+$dat->pro_belut+$dat->pro_udang_galah+
                    $dat->pro_tambakan+$dat->pro_patin)

                @php($nil_produksi = $dat->nil_lele+$dat->nil_nila+$dat->nil_kaper+
                    $dat->nil_nilem+$dat->nil_gurame+$dat->nil_tawes+$dat->nil_mujair+
                    $dat->nil_bawal+$dat->nil_belut+$dat->nil_udang_galah+
                    $dat->nil_tambakan+$dat->nil_patin)
                <tr>
                        <td style="text-align: center; font-size:10px">{{$no++}}</td>
                        <td style="text-align: center; font-size:10px" colspan="2">{{$dat->desa}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->pro_lele}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->nil_lele}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->pro_nila}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->nil_nila}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->pro_kaper}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->nil_kaper}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->pro_nilem}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->nil_nilem}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->pro_gurame}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->nil_gurame}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->pro_tawes}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->nil_tawes}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->pro_mujair}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->nil_mujair}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->pro_bawal}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->nil_bawal}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->pro_belut}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->nil_belut}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->pro_udang_galah}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->nil_udang_galah}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->pro_tambakan}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->nil_tambakan}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->pro_patin}}</td>
                        <td style="text-align: center; font-size:10px">{{$dat->nil_patin}}</td>
                        <td style="text-align: center; font-size:10px">{{$jml_produksi}}</td>
                        <td style="text-align: center; font-size:10px">{{$nil_produksi}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
