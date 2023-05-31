<?php

namespace App\Http\Controllers;

use App\SyaratPendaftaran;
use Illuminate\Http\Request;

class SyaratPendaftaranController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        SyaratPendaftaran::create($data);
        return redirect('/dashboard/pendaftaran');
    }


    /**
     * edit the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SyaratPendaftaran  $syarat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $syarat = SyaratPendaftaran::findOrFail($id);
        return view('dashboard.enrollment.syarat', compact('syarat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SyaratPendaftaran  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $syarat = SyaratPendaftaran::findOrFail($id);
        $data = $request->all();
        $syarat->update($data);
        return redirect('/dashboard/pendaftaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SyaratPendaftaran  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SyaratPendaftaran::findOrFail($id);
        $data->delete();
        return back();
    }
}
