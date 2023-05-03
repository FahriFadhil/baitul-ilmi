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
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $syarat = SyaratPendaftaran::findOrFail($id);
        return view('dashboard.syarat', compact('syarat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $syarat = SyaratPendaftaran::findOrFail($id);
        $data = $request->all();
        $syarat->update($data);
        return redirect('/dashboard/syarat');
    }
}
