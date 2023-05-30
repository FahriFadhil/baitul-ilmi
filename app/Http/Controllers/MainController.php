<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\BiayaPendaftaran;
use App\AlurPendaftaran;
use App\Gallery;
use App\News;
use Illuminate\Http\Request;
use App\SyaratPendaftaran;
use App\AgendaPendaftaran;
use App\StatusPendaftaran;
use App\Guru;
use App\Principal;

class MainController extends Controller
{
    public function home()
    {
        $data_berita = News::all();
        $data_status = StatusPendaftaran::all();
        return view('home', compact('data_berita', 'data_status'));
    }
    public function profile()
    {
        return view('profile');
    }
    public function academic()
    {
        return view('academic');
    }
    public function news()
    {
        $data_berita = News::all();
        return view('news.index', compact('data_berita'));
    }
    public function enrollment()
    {
        $data_status = StatusPendaftaran::all();
        $data_syarat = SyaratPendaftaran::all();
        $data_agenda = AgendaPendaftaran::all();
        $data_biaya = BiayaPendaftaran::all();
        $data_alur = AlurPendaftaran::all();
        return view('enrollment', compact('data_syarat', 'data_agenda', 'data_biaya', 'data_alur', 'data_status'));
    }
    public function gallery()
    {
        $data_gallery = Gallery::all();
        return view('gallery', compact('data_gallery'));
    }
    public function alumni()
    {
        $data_alumni = Alumni::all();
        return view('alumni', compact('data_alumni'));
    }
    public function dashboard()
    {
        $data_principal = Principal::first();
        $data_guru = Guru::all();
        return view('dashboard.index', compact('data_guru', 'data_principal'));
    }
    
    public function pendaftaran()
    {
        $data_syarat = SyaratPendaftaran::all();
        $data_agenda = AgendaPendaftaran::all();
        $data_biaya = BiayaPendaftaran::all();
        $data_alur = AlurPendaftaran::all();
        $data_status = StatusPendaftaran::all();
        return view('dashboard.enrollment.index', compact('data_syarat', 'data_agenda', 'data_biaya', 'data_alur', 'data_status'));
    }
}
