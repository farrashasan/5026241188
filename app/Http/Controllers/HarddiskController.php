<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HarddiskController extends Controller
{
    public function indexHarddisk()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); --> JIKA TIDAK PAKAI PAGINATE
        $harddisk = DB::table('harddisk')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('harddisk',['harddisk' => $harddisk]);

    }

	public function cariHarddisk(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$harddisk = DB::table('harddisk')
		->where('merkharddisk','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index_harddisk',['harddisk' => $harddisk]);

	}

    // method untuk menampilkan view form tambah pegawai
	public function tambahHarddisk()
	{

		// memanggil view tambah
		return view('tambah_harddisk');

	}

	// method untuk insert data ke table pegawai
	public function storeHarddisk(Request $request)
	{
		// insert data ke table pegawai
		DB::table('harddisk')->insert([
			'merkharddisk' => $request->merk,
			'stockharddisk' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/harddisk');

	}

	// method untuk edit data pegawai
	public function editHarddisk($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$harddisk = DB::table('harddisk')->where('kodeharddisk',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit_harddisk',['harddisk' => $harddisk]);

	}

	// update data pegawai
	public function updateHarddisk(Request $request)
	{
		// update data pegawai
		DB::table('harddisk')->where('kodeharddisk',$request->id)->update([
			'merkharddisk' => $request->merk,
			'stockharddisk' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/harddisk');
	}

	// method untuk hapus data pegawai
	public function hapusHarddisk($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('harddisk')->where('kodeharddisk',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/harddisk');
	}
}
