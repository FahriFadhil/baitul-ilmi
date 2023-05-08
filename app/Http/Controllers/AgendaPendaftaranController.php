<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AgendaPendaftaran;

class AgendaPendaftaranController extends Controller
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
        AgendaPendaftaran::create($data);
        return redirect('/dashboard/pendaftaran');
    }


    /**
     * edit the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AgendaPendaftaran  $syarat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agenda = AgendaPendaftaran::findOrFail($id);
        return view('dashboard.enrollment.agenda', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AgendaPendaftaran  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $agenda = AgendaPendaftaran::findOrFail($id);
        $data = $request->all();
        $agenda->update($data);
        return redirect('/dashboard/pendaftaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AgendaPendaftaran  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = AgendaPendaftaran::findOrFail($id);
        $data->delete();
        return back();
    }
}
