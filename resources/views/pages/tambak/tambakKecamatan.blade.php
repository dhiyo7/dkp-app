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
    <p class="text-sm-left">Data Produksi Tambak 2019</p>
    <p class="text-sm-left">Nama Penyuluh : {{$data[0]->penyuluh}}</p>
    <p class="text-sm-left">Kecamatan : {{$data[0]->kecamatan}}</p>
    {{-- <p class="text-sm-left">Wilayah Kerja : {{$data[0]->wilayah}}</p> --}}
    <p class="text-sm-left">Bulan : {{$data[0]->bulan}}</p>
    <div class="table-responsive">
        <table border="1">
            <thead>
                <tr>
                    <td style="text-align: center;" rowspan="2">No</td>
                    <td style="text-align: center;" colspan="2" rowspan="2">Desa</td>
                    <td style="text-align: center;" colspan="2">Rumput Laut</td>
                    <td style="text-align: center;" colspan="2">Udang Vaname Sederhana</td>
                    <td style="text-align: center;" colspan="2">Udang Vaname Semi Intensif</td>
                    <td style="text-align: center;" colspan="2">Udang Vaname Intensif</td>
                    <td style="text-align: center;" colspan="2">Udang Windu</td>
                    <td style="text-align: center;" colspan="2">Udang Putih</td>
                    <td style="text-align: center;" colspan="2">Udang Lokal</td>
                    <td style="text-align: center;" colspan="2">Bandeng</td>
                    <td style="text-align: center;" colspan="2">Lele</td>
                    <td style="text-align: center;" colspan="2">Jumlah</td>
                </tr>
                <tr>
                    <td>Produski (Kg)</td>
                    <td>Nilai (Rp)</td>
                    <td>Produski (Kg)</td>
                    <td>Nilai (Rp)</td>
                    <td>Produski (Kg)</td>
                    <td>Nilai (Rp)</td>
                    <td>Produski (Kg)</td>
                    <td>Nilai (Rp)</td>
                    <td>Produski (Kg)</td>
                    <td>Nilai (Rp)</td>
                    <td>Produski (Kg)</td>
                    <td>Nilai (Rp)</td>
                    <td>Produski (Kg)</td>
                    <td>Nilai (Rp)</td>
                    <td>Produski (Kg)</td>
                    <td>Nilai (Rp)</td>
                    <td>Produski (Kg)</td>
                    <td>Nilai (Rp)</td>
                    <td>Produski (Kg)</td>
                    <td>Nilai (Rp)</td>
                </tr>
            </thead>
            <tbody>
                @php($no = 1)

                @foreach ($data as $dat)

                @php(
                    $produksi = $dat->pro_rumput_laut+$dat->pro_udang_windu+
                                $dat->pro_udang_vaname_sederhana+$dat->pro_udang_vaname_semi+
                                $dat->pro_udang_vaname_intensif+$dat->pro_udang_putih+
                                $dat->pro_udang_lokal+$dat->pro_bandeng+$dat->pro_lele)
                @php($nilai = $dat->nil_rumput_laut+$dat->nil_udang_windu+
                              $dat->nil_udang_vaname_sederhana+$dat->nil_udang_vaname_semi+
                              $dat->nil_udang_vaname_intensif+$dat->nil_udang_putih+
                              $dat->nil_udang_lokal+$dat->nil_bandeng+$dat->nil_lele)


                <tr>
                    <td>{{$no++}}</td>
                    <td colspan="2">{{$dat->desa}}</td>
                    <td>{{$dat->pro_rumput_laut}}</td>
                    <td>{{$dat->nil_rumput_laut}}</td>
                    <td>{{$dat->pro_udang_windu}}</td>
                    <td>{{$dat->nil_udang_windu}}</td>
                    <td>{{$dat->pro_udang_vaname_sederhana}}</td>
                    <td>{{$dat->nil_udang_vaname_sederhana}}</td>
                    <td>{{$dat->pro_udang_vaname_semi}}</td>
                    <td>{{$dat->nil_udang_vaname_semi}}</td>
                    <td>{{$dat->pro_udang_vaname_intensif}}</td>
                    <td>{{$dat->nil_udang_vaname_intensif}}</td>
                    <td>{{$dat->pro_udang_putih}}</td>
                    <td>{{$dat->nil_udang_putih}}</td>
                    <td>{{$dat->pro_udang_lokal}}</td>
                    <td>{{$dat->nil_udang_lokal}}</td>
                    <td>{{$dat->pro_bandeng}}</td>
                    <td>{{$dat->nil_bandeng}}</td>
                    <td>{{$dat->pro_lele}}</td>
                    <td>{{$dat->nil_lele}}</td>
                    <td>{{$produksi}}</td>
                    <td>{{$nilai}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
