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
     * @param  \App\AlurPendaftaran  $data_alur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_alur = AlurPendaftaran::findOrFail($id);
        return view('dashboard.enrollment.alur', compact('data_alur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AlurPendaftaran  $data_alur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_alur = AlurPendaftaran::findOrFail($id);
        $data = $request->all();
        $data_alur->update($data);
        return redirect('/dashboard/pendaftaran');
    }
}
