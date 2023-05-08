<?php

namespace App\Http\Controllers;

use App\BiayaPendaftaran;
use Illuminate\Http\Request;
use DB;

class BiayaPendaftaranController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data_biaya = BiayaPendaftaran::all();
        return view('dashboard.enrollment.biaya', compact('data_biaya'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
        $biaya_lama = BiayaPendaftaran::all();
        $biaya_baru = $request->all();
        dd($biaya_baru);
        
        $biaya = $biaya_baru['jumlah_biaya'];

        return redirect('/dashboard/pendaftaran');

    }
}
