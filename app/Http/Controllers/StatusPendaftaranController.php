<?php

namespace App\Http\Controllers;

use App\StatusPendaftaran;
use Illuminate\Http\Request;

class StatusPendaftaranController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StatusPendaftaran  $data_status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_status = StatusPendaftaran::findOrFail($id);
        $data = $request->all();
        $data_status->update($data);
        return redirect('/dashboard/pendaftaran');
    }
}
