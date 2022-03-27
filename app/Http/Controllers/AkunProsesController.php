<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Status;
use Illuminate\Http\Request;
use Alert;

class AkunProsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('netflix-proses',[
    //         'akuns' => Akun::where('status_id', 1)->where('kategori_id', 1)->orderBy('created_at', 'asc')->get(),
    //         'statuses' => Status::all()
    //     ]);
    // }

    // public function showSpotify(){
    //     return view('spotify-proses',[
    //         'akuns' => Akun::where('status_id', 1)->where('kategori_id', 2)->orderBy('created_at', 'asc')->get(),
    //         'statuses' => Status::all()
    //     ]);
    // }

    public function showYoutube(){
        return view('youtube-proses',[
            'akuns' => Akun::where('status_id', 1)->where('kategori_id', 3)->orderBy('created_at', 'asc')->get(),
            'statuses' => Status::all()
        ]);
    }

    public function showCanva(){
        return view('canva-proses',[
            'akuns' => Akun::where('status_id', 1)->where('kategori_id', 4)->orderBy('created_at', 'asc')->get(),
            'statuses' => Status::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show(Akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit(Akun $akun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function updateCanva(Request $request, $id)
    {
        $rules = [
            'status_id' => 'required'
        ];

        $validatedData = $request->validate($rules);

        $akun = Akun::find($id);
        $akun->update($validatedData);

        Alert::success('Berhasil', 'Sukses mengupdate data!');
        return redirect('/canva/order-proses');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Akun $akun)
    {
        //
    }
}
