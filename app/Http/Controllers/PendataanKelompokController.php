<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssetPelakuUsaha;
use App\KomoditasPelakuUsaha;
use App\PelakuUsaha;
use App\PengurusPendataan;
use App\ProduksiPerBulan;
use App\SumberBahanBaku;
use App\Penyuluh;
use DB;

class PendataanKelompokController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kelompoks = DB::table('pelaku_usahas')
                    ->where('jenis', '=', 'kelompok')
                    ->get();


        return view('pages.pendataan.kelompok.index', compact('kelompoks'));

        // $kelompoks = DB::table('pelaku_usahas')
        //             ->join('komoditas_pelaku_usahas', 'pelaku_usahas.id', '=', 'komoditas_pelaku_usahas.id_pelaku')
        //             ->join('asset_pelaku_usahas', 'pelaku_usahas.id', '=', 'asset_pelaku_usahas.id_pelaku')
        //             ->join('pengurus_pendataans', 'pelaku_usahas.id', '=', 'pengurus_pendataans.id_pelaku')
        //             ->join('sumber_bahan_bakus', 'pelaku_usahas.id', '=', 'sumber_bahan_bakus.id_pelaku')
        //             ->join('produksi_per_bulans', 'pelaku_usahas.id', '=', 'produksi_per_bulans.id_pelaku')
        //             ->select('pelaku_usahas.*', 'komoditas_pelaku_usahas.*', 'asset_pelaku_usahas.*',
        //                     'pengurus_pendataans.*', 'sumber_bahan_bakus.*', 'produksi_per_bulans.*')
        //             ->get();
        // return response()->json([
        //     'data' => [
        //         'id' => $kelompoks->id,
        //         'komoditas' => $results
        //     ]
        // ]);
    }


    public function create()
    {
        $penyuluhs = Penyuluh::all();
        return view('pages.pendataan.kelompok.addKelompok', compact('penyuluhs'));
    }


    public function store(Request $request)
    {
        $data = $request->all();

        $pelaku = PelakuUsaha::create([
            'jenis' => $request->jenis,
            'nama_pelaku' => $request->nama_pelaku,
            'kategori' => $request->kategori,
            'kecamatan' => $request->kecamatan,
            'bulan' => $request->bulan,
            'penyuluh' => $request->penyuluh,
            'alamat' => $request->alamat,
            'tahun_berdiri' => $request->tahun_berdiri,
            'legalitas' => $request->legalitas,
            'no_hp' => $request->no_hp,
            'jml_kelompok' => $request->jml_kelompok,
            'kelas_kelompok' => $request->kelas_kelompok,
            'jml_produksi' => $request->jml_produksi,
            'harga_produk' => $request->harga_produk,
            'nilai_produksi' => $request->nilai_produksi,
            'jml_pekerja' => $request->jml_pekerja,
            'status_pekerja' => $request->status_pekerja,
            'pemasaran' => $request->pemasaran,
            'pendapatan_per_bulan' => $request->pendapatan_per_bulan,
            'pengeluaran_per_bulan' => $request->pengeluaran_per_bulan,
            'nama_bantuan' => $request->nama_bantuan,
            'sumber_bantuan' => $request->sumber_bantuan,
            'tahun_bantuan' => $request->tahun_bantuan,
            'keterangan' => $request->keterangan
        ]);



        $pengurus = PengurusPendataan::create([
            'id_pelaku' => $pelaku->id,
            'ketua' => $request->ketua,
            'sekretaris' => $request->sekretaris,
            'bendahara' => $request->bendahara
        ]);

        $sumber = SumberBahanBaku::create([
            'id_pelaku' => $pelaku->id,
            'jenis_bahan_baku' => $request->jenis_bahan_baku,
            'asal_bahan_baku' => $request->asal_bahan_baku,
            'jml_bahan_baku' => $request->jml_bahan_baku,
            'harga_pcs' => $request->harga_pcs,
        ]);

        foreach ($request->komoditas as $komoditas) {
            $inputKomoditas = new KomoditasPelakuUsaha([
                'id_pelaku' => $pelaku->id,
                'jenis_komoditas' => $komoditas['jenis_komoditas']
            ]);
            $inputKomoditas->save();
        }

        foreach ($request->asset as $asset) {
            $inputAsset = new AssetPelakuUsaha([
                'id_pelaku' => $pelaku->id,
                'sarana' => $asset['sarana'],
                'jml_asset' => $asset['jml_asset'],
                'status' => $asset['status'],
                'nil_asset' => $asset['nil_asset']
            ]);
            $inputAsset->save();
        }

        foreach ($request->bahan as $bahan) {
            $inputBiayaProduksi = new ProduksiPerBulan([
                'id_pelaku' => $pelaku->id,
                'bahan_baku_utama' => $bahan['bahan_baku_utama'],
                'nilai_bahan_baku_utama' => $bahan['nilai_bahan_baku_utama']
            ]);
            $inputBiayaProduksi->save();
        }

        return redirect()->back()->with('success','Pendataan berhasil ditambahkan');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
