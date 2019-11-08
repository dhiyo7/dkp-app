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

        <h4 class="text-center">DATA PRODUKSI TAMBAK PERIKANAN KABUPATEN BREBES</h4>
        <h5 class="text-center">DINAS PERIKANAN KABUPATEN BREBES TAHUN 2019</h5>
        <h5 class="text-center">Bulan {{$data[0]->bulan}}</h5>

    {{-- <p class="text-sm-left">Data Produksi Tambak 2019</p> --}}
    {{-- <p class="text-sm-left">Nama Penyuluh : {{$data[0]->penyuluh}}</p> --}}
    {{-- <p class="text-sm-left">Kecamatan : {{$data[0]->kecamatan}}</p> --}}
    {{-- <p class="text-sm-left">Wilayah Kerja : {{$data[0]->wilayah}}</p> --}}
    {{-- <p class="text-sm-left">Bulan : {{$data[0]->bulan}}</p> --}}
    <div class="table-responsive">
        <table border="1">
            <thead>
                <tr>
                    <td style="text-align: center; font-size:12px"" rowspan="2">No</td>
                    <td style="text-align: center; font-size:12px"" colspan="2" rowspan="2">Desa</td>
                    <td style="text-align: center; font-size:12px"" colspan="2" rowspan="2">Kecamatan</td>
                    <td style="text-align: center; font-size:12px"" colspan="2" rowspan="2">Penyuluh</td>
                    <td style="text-align: center; font-size:12px"" colspan="2">Rumput Laut</td>
                    <td style="text-align: center; font-size:12px"" colspan="2">Udang Vaname Sederhana</td>
                    <td style="text-align: center; font-size:12px"" colspan="2">Udang Vaname Semi Intensif</td>
                    <td style="text-align: center; font-size:12px"" colspan="2">Udang Vaname Intensif</td>
                    <td style="text-align: center; font-size:12px"" colspan="2">Udang Windu</td>
                    <td style="text-align: center; font-size:12px"" colspan="2">Udang Putih</td>
                    <td style="text-align: center; font-size:12px"" colspan="2">Udang Lokal</td>
                    <td style="text-align: center; font-size:12px"" colspan="2">Bandeng</td>
                    <td style="text-align: center; font-size:12px"" colspan="2">Lele</td>
                    <td style="text-align: center; font-size:12px"" colspan="2">Jumlah</td>
                </tr>
                <tr>
                    <td style="font-size:12px">Produski (Kg)</td>
                    <td style="font-size:12px">Nilai (Rp)</td>
                    <td style="font-size:12px">Produski (Kg)</td>
                    <td style="font-size:12px">Nilai (Rp)</td>
                    <td style="font-size:12px">Produski (Kg)</td>
                    <td style="font-size:12px">Nilai (Rp)</td>
                    <td style="font-size:12px">Produski (Kg)</td>
                    <td style="font-size:12px">Nilai (Rp)</td>
                    <td style="font-size:12px">Produski (Kg)</td>
                    <td style="font-size:12px">Nilai (Rp)</td>
                    <td style="font-size:12px">Produski (Kg)</td>
                    <td style="font-size:12px">Nilai (Rp)</td>
                    <td style="font-size:12px">Produski (Kg)</td>
                    <td style="font-size:12px">Nilai (Rp)</td>
                    <td style="font-size:12px">Produski (Kg)</td>
                    <td style="font-size:12px">Nilai (Rp)</td>
                    <td style="font-size:12px">Produski (Kg)</td>
                    <td style="font-size:12px">Nilai (Rp)</td>
                    <td style="font-size:12px">Produski (Kg)</td>
                    <td style="font-size:12px">Nilai (Rp)</td>
                </tr>
            </thead>
            <tbody>
                @php($no = 1) @foreach ($data as $dat)
                @php($produksi = $dat->pro_rumput_laut+$dat->pro_udang_windu+
                                $dat->pro_udang_vaname_sederhana+$dat->pro_udang_vaname_semi+
                                $dat->pro_udang_vaname_intensif+$dat->pro_udang_putih+
                                $dat->pro_udang_lokal+$dat->pro_bandeng+$dat->pro_lele)
                @php($nilai = $dat->nil_rumput_laut+$dat->nil_udang_windu+
                              $dat->nil_udang_vaname_sederhana+$dat->nil_udang_vaname_semi+
                              $dat->nil_udang_vaname_intensif+$dat->nil_udang_putih+
                              $dat->nil_udang_lokal+$dat->nil_bandeng+$dat->nil_lele)
                <tr>
                    <td style="font-size:12px">{{$no++}}</td>
                    <td style="font-size:12px" colspan="2">{{$dat->desa}}</td>
                    <td style="font-size:12px" colspan="2">{{$dat->kecamatan}}</td>
                    <td style="font-size:12px" colspan="2">{{$dat->penyuluh}}</td>
                    <td style="font-size:12px">{{$dat->pro_rumput_laut}}</td>
                    <td style="font-size:12px">{{$dat->nil_rumput_laut}}</td>
                    <td style="font-size:12px">{{$dat->pro_udang_windu}}</td>
                    <td style="font-size:12px">{{$dat->nil_udang_windu}}</td>
                    <td style="font-size:12px">{{$dat->pro_udang_vaname_sederhana}}</td>
                    <td style="font-size:12px">{{$dat->nil_udang_vaname_sederhana}}</td>
                    <td style="font-size:12px">{{$dat->pro_udang_vaname_semi}}</td>
                    <td style="font-size:12px">{{$dat->nil_udang_vaname_semi}}</td>
                    <td style="font-size:12px">{{$dat->pro_udang_vaname_intensif}}</td>
                    <td style="font-size:12px">{{$dat->nil_udang_vaname_intensif}}</td>
                    <td style="font-size:12px">{{$dat->pro_udang_putih}}</td>
                    <td style="font-size:12px">{{$dat->nil_udang_putih}}</td>
                    <td style="font-size:12px">{{$dat->pro_udang_lokal}}</td>
                    <td style="font-size:12px">{{$dat->nil_udang_lokal}}</td>
                    <td style="font-size:12px">{{$dat->pro_bandeng}}</td>
                    <td style="font-size:12px">{{$dat->nil_bandeng}}</td>
                    <td style="font-size:12px">{{$dat->pro_lele}}</td>
                    <td style="font-size:12px">{{$dat->nil_lele}}</td>
                    <td style="font-size:12px">{{$produksi}}</td>
                    <td style="font-size:12px">{{$nilai}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
