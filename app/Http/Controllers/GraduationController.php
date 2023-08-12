<?php

namespace App\Http\Controllers;

use App\Graduation;
use App\Principal;
use Illuminate\Http\Request;

class GraduationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        Graduation::create($data);
        return redirect('/dashboard/alumni/create');
    }

    public function destroy($id)
    {
        $data = Graduation::find($id);
        $data -> delete();
        return back();
    }
}
