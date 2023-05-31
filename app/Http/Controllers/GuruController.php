<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Principal;

class GuruController extends Controller
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

        $destination_path = 'public/images'; //path tempat penyimpanan (storage/public/images/profile)
        $image = $request->file('image'); //mengambil request column image
        $image_name = $image->getClientOriginalName(); //memberikan nama gambar yang akan disimpan di foto
        $path = $request->file('image')->storeAs($destination_path, $image_name); //mengirimkan foto ke folder store
        $data['image'] = $image_name; //mengirimkan ke database

        Guru::create($data);
        return redirect('/dashboard');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Guru::findOrFail($id);
        $data->delete();
        return back();
    }

    public function update(Request $request, $id)
    {
        $data_principal = Principal::findOrFail($id);
        $data = $request->all();

        dd($data_principal, $data);
        $destination_path = 'public/images'; //path tempat penyimpanan (storage/public/images/profile)
        $image = $request->file('images'); //mengambil request column images
        $image_name = $image->getClientOriginalName(); //memberikan nama gambar yang akan disimpan di foto
        $path = $request->file('images')->storeAs($destination_path, $image_name); //mengirimkan foto ke folder store
        $data['images'] = $image; //mengirimkan nama ke database

        $data_principal->update($data);
        return redirect('/dashboard');
    }
}
