<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Akun;
use Alert;

class TambahAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/tambahdata', [
            'title' => 'tambah data',
            'active' => 'tambah data',
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns',
            'kategori_id' => 'required',
            'name' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required'
        ], [
            'email.required' => 'Mohon masukkan email akun',
            'kategori_id.required' => 'Mohon pilih jenis akun',
            'name.required' => 'mohon masukkan nama/profil pemesan',
            'tgl_mulai.required' => 'Mohon masukkan tanggal awal pemesanan',
            'tgl_akhir.required' => 'Mohon masukkan tanggal akhir pemesanan'
        ]); 

        
        if ($validatedData['tgl_mulai'] > $validatedData['tgl_akhir']) {
            Alert::error('Gagal', 'Tanggal Akhir harus lebih besar');
            return back();
        }else {
            $akun = Akun::create($validatedData);
            $akun->save();
            Alert::success('Berhasil', 'Sukses menambahkan data baru!');
            return redirect('/tambahdata');
        }

        

        
    }

    
}
