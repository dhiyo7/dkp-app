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

    <h4 class="text-center">DATA PRODUKSI RAGAM PRODUK HASIL PERIKANAN KABUPATEN BREBES</h4>
    <h5 class="text-center">DINAS PERIKANAN KABUPATEN BREBES TAHUN 2019</h5>
    <h5 class="text-center">Bulan {{$data[0]->bulan}}</h5>
    <br>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <td style="text-align: center; font-size:10px">No</td>
                    <td style="text-align: center; font-size:10px">Jenis Olahan</td>
                    <td style="text-align: center; font-size:10px">Produk Olahan</td>
                    <td style="text-align: center; font-size:10px">Nama UPI/POKLAHSAR/UMKM</td>
                    <td style="text-align: center; font-size:10px">Penyuluh</td>
                    <td style="text-align: center; font-size:10px">Alamat</td>
                    <td style="text-align: center; font-size:10px">Produksi (Kg)</td>
                    <td style="text-align: center; font-size:10px">Nilai Produksi (Rp)</td>
                    <td style="text-align: center; font-size:10px">Keterangan</td>
                </tr>
            </thead>
            <tbody>
                @php($no = 1) @foreach ($data as $dat)
                <tr>
                    <td style="font-size:10px">{{$no++}}</td>
                    <td style="font-size:10px">{{$dat->jenis}}</td>
                    <td style="font-size:10px">{{$dat->produk_olahan}}</td>
                    <td style="font-size:10px">{{$dat->name}}</td>
                    <td style="font-size:10px">{{$dat->penyuluh}}</td>
                    <td style="font-size:10px">{{$dat->alamat}}, {{$dat->kecamatan}}</td>
                    <td style="font-size:10px">{{$dat->produksi}}</td>
                    <td style="font-size:10px">{{$dat->nil_produksi}}</td>
                    <td style="font-size:10px">{{$dat->keterangan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
