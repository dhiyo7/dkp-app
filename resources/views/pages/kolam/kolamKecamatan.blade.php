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
                    <td style="text-align: center;" rowspan="2">No</td>
                    <td style="text-align: center;" colspan="2" rowspan="2">Desa</td>
                    <td style="text-align: center;" colspan="2">Lele</td>
                    <td style="text-align: center;" colspan="2">Nila</td>
                    <td style="text-align: center;" colspan="2">Kaper Mas</td>
                    <td style="text-align: center;" colspan="2">Nilem</td>
                    <td style="text-align: center;" colspan="2">Gurame</td>
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
                </tr>
            </thead>
            <tbody>
                @php($no = 1) @foreach ($data as $dat)
                <tr>
                    <td>{{$no++}}</td>
                    <td colspan="2">{{$dat->desa}}</td>
                    <td>{{$dat->pro_lele}}</td>
                    <td>{{$dat->nil_lele}}</td>
                    <td>{{$dat->pro_nila}}</td>
                    <td>{{$dat->nil_nila}}</td>
                    <td>{{$dat->pro_kaper}}</td>
                    <td>{{$dat->nil_kaper}}</td>
                    <td>{{$dat->pro_nilem}}</td>
                    <td>{{$dat->nil_nilem}}</td>
                    <td>{{$dat->pro_gurame}}</td>
                    <td>{{$dat->nil_gurame}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
