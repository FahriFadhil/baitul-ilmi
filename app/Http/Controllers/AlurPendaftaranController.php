<?php

namespace App\Http\Controllers;

use App\AlurPendaftaran;
use Illuminate\Http\Request;

class AlurPendaftaranController extends Controller
{
    /**
     * edit the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AlurPendaftaran  $syarat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_biaya = AlurPendaftaran::findOrFail($id);
        return view('dashboard.enrollment.biaya', compact('data_biaya'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AlurPendaftaran  $data_biaya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_biaya = AlurPendaftaran::findOrFail($id);
        $data = $request->all();
        $data_biaya->update($data);
        return redirect('/dashboard/pendaftaran');
    }
}
