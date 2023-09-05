<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function update(Request $request, $id) {    
        $video = Video::findOrFail($id);
        $data = $request->all();
        $video->update($data);
        return redirect('/dashboard');
    }
}
