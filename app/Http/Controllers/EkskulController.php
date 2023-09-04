<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ekskul;

class EkskulController extends Controller
{

    public function index()
    {
        $data = Ekskul::all();
        return view('/dashboard', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/dashboard');
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

        if ($request->hasFile('photo')) {
            $destination_path = 'public/images';
            $image = $request['photo'];
            $name = $image->getClientOriginalName();
            $request['photo']->storeAs($destination_path, $name);
            $data['photo'] = $name;
        };
        
        Ekskul::create($data);
        return redirect('/dashboard');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ekskul = Ekskul::findOrFail($id);
        return view('/dashboard/edit', compact('ekskul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ekskul = Ekskul::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('photo')) {
            $destination_path = 'public/images';
            $image = $request->file('photo');
            $name = $image->getClientOriginalName();
            $request->file('photo')->storeAs($destination_path, $name);
            $data['photo'] = $name;
        };

        $ekskul->update($data);
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Ekskul::find($id);
        $data->delete();
        return back();
    }
}
