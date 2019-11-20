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
    <p class="text-sm-left">Nama Penyuluh : {{$data[0]->penyuluh}}</p>
    {{-- <p class="text-sm-left">Kecamatan : {{$data[0]->kecamatan}}</p> --}}
    {{-- <p class="text-sm-left">Wilayah Kerja : {{$data[0]->wilayah}}</p> --}}
    <p class="text-sm-left">Bulan : {{$data[0]->bulan}}</p>
    <div class="table-responsive">
        <table class="table table-bordered" style="table-layout:fixed;">
            <thead class="thead-dark">
                <tr>
                    <td style="text-align: center;" rowspan="2">No</td>
                    <td style="text-align: center;" colspan="2" rowspan="2">Desa</td>
                    <td style="text-align: center;" rowspan="2">Kecamatan</td>
                    <td style="text-align: center;" colspan="2">Lele</td>
                    <td style="text-align: center;" colspan="2">Nila</td>
                    <td style="text-align: center;" colspan="2">Kaper Mas</td>
                    <td style="text-align: center;" colspan="2">Nilem</td>
                    <td style="text-align: center;" colspan="2">Gurameh</td>
                    <td style="text-align: center;" colspan="2">Tawes</td>
                    <td style="text-align: center;" colspan="2">Mujair</td>
                    <td style="text-align: center;" colspan="2">Bawal</td>
                    <td style="text-align: center;" colspan="2">Belut</td>
                    <td style="text-align: center;" colspan="2">Udang Galah</td>
                    <td style="text-align: center;" colspan="2">Tambakan</td>
                    <td style="text-align: center;" colspan="2">Patin</td>
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
                @php($jml_produksi = $dat->pro_lele+$dat->pro_nila+$dat->pro_kaper+
                    $dat->pro_nilem+$dat->pro_gurame+$dat->pro_tawes+$dat->pro_mujair+
                    $dat->pro_bawal+$dat->pro_belut+$dat->pro_udang_galah+
                    $dat->pro_tambakan+$dat->pro_patin)

                @php($nil_produksi = $dat->nil_lele+$dat->nil_nila+$dat->nil_kaper+
                    $dat->nil_nilem+$dat->nil_gurame+$dat->nil_tawes+$dat->nil_mujair+
                    $dat->nil_bawal+$dat->nil_belut+$dat->nil_udang_galah+
                    $dat->nil_tambakan+$dat->nil_patin)

                <tr>
                    <td>{{$no++}}</td>
                    <td colspan="2">{{$dat->desa}}</td>
                    <td>{{$dat->kecamatan}}</td>
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
                    <td>{{$dat->pro_tawes}}</td>
                    <td>{{$dat->nil_tawes}}</td>
                    <td>{{$dat->pro_mujair}}</td>
                    <td>{{$dat->nil_mujair}}</td>
                    <td>{{$dat->pro_bawal}}</td>
                    <td>{{$dat->nil_bawal}}</td>
                    <td>{{$dat->pro_belut}}</td>
                    <td>{{$dat->nil_belut}}</td>
                    <td>{{$dat->pro_udang_galah}}</td>
                    <td>{{$dat->nil_udang_galah}}</td>
                    <td>{{$dat->pro_tabakan}}</td>
                    <td>{{$dat->nil_tabakan}}</td>
                    <td>{{$dat->pro_patin}}</td>
                    <td>{{$dat->nil_patin}}</td>
                    <td>{{$jml_produksi}}</td>
                    <td>{{$nil_produksi}}</td>
                </tr>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
