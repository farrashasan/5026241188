<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EasController extends Controller
{
    public function penggajian()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); --> JIKA TIDAK PAKAI PAGINATE
        $penggajian = DB::table('penggajian')->get();

    	// mengirim data pegawai ke view index
    	return view('penggajian', ['penggajian' => $penggajian]);

    }

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('eas_tambah');

	}

	// method untuk insert data ke table pegawai
	public function tambahData(Request $request)
	{
		// insert data ke table pegawai
		DB::table('penggajian')->insert([
			'NIP' => $request->nip,
			'GajiPokok' => $request->gajipokok,
			'Potongan' => $request->potongan
		]);
		// alihkan halaman ke halaman keranjang
		return redirect('/eas');

	}

}
