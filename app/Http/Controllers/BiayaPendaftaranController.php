<?php

namespace App\Http\Controllers;

use App\BiayaPendaftaran;
use Illuminate\Http\Request;

class BiayaPendaftaranController extends Controller
{
    /**
     * edit the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BiayaPendaftaran  $syarat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_biaya = BiayaPendaftaran::findOrFail($id);
        return view('dashboard.enrollment.biaya', compact('data_biaya'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BiayaPendaftaran  $data_biaya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_biaya = BiayaPendaftaran::findOrFail($id);
        $data = $request->all();
        $data_biaya->update($data);
        return redirect('/dashboard/pendaftaran');
    }
}
