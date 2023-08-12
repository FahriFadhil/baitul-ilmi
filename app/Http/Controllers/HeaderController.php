<?php

namespace App\Http\Controllers;

use App\HomeHeader;
use App\PendaftaranHeader;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function home(Request $request)
    {
        $data_home_header = HomeHeader::all();

        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $image1->storeAs('storage/images', $image1->getClientOriginalName());
            $data_home_header[0]->image = 'storage/images/' . $image1->getClientOriginalName();
            $data_home_header[0]->save();
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $image2->storeAs('storage/images', $image2->getClientOriginalName());
            $data_home_header[1]->image = 'storage/images/' . $image2->getClientOriginalName();
            $data_home_header[1]->save();
        }

        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $image3->storeAs('storage/images', $image3->getClientOriginalName());
            $data_home_header[2]->image = 'storage/images/' . $image3->getClientOriginalName();
            $data_home_header[2]->save();
        }

        return back();
    }
    public function pendaftaran(Request $request)
    {
        $data_pendaftaran_header = PendaftaranHeader::all();

        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $image1->storeAs('storage/images', $image1->getClientOriginalName());
            $data_pendaftaran_header[0]->image = 'storage/images/' . $image1->getClientOriginalName();
            $data_pendaftaran_header[0]->save();
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $image2->storeAs('storage/images', $image2->getClientOriginalName());
            $data_pendaftaran_header[1]->image = 'storage/images/' . $image2->getClientOriginalName();
            $data_pendaftaran_header[1]->save();
        }

        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $image3->storeAs('storage/images', $image3->getClientOriginalName());
            $data_pendaftaran_header[2]->image = 'storage/images/' . $image3->getClientOriginalName();
            $data_pendaftaran_header[2]->save();
        }

        return back();
    }
}
