<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\Graduation;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataalumni = Alumni::paginate(10);
        return view('dashboard.Alumni.index', compact('dataalumni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datakelulusan = Graduation::all();
        return view('dashboard.alumni.create', compact('datakelulusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Alumni::create($data);
        return redirect('/dashboard/alumni');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataalumni = Alumni::FindOrFail($id);
        $datakelulusan = Graduation::all();
        return view('dashboard.alumni.edit', compact('dataalumni', 'datakelulusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $alumni = Alumni::find($id);
        $alumni->update($data);
        return redirect ('/dashboard/alumni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Alumni::find($id);
        $data -> delete();
        return back();
    }
}