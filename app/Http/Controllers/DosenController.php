<?php

namespace App\Http\Controllers;
//package kuliah.week3

use Illuminate\Http\Request;
//import

class DosenController extends Controller
{
    //


public function index(){
    return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
}

public function biodata(){
    	$nama = " Farras Hasan";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata',['nama' => $nama, 'matkul' => $pelajaran]);
}

}
