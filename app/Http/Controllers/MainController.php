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

class MainController extends Controller
{
    public function home()
    {
        $data_berita = News::all();
        return view('home', compact('data_berita'));
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
        return view('enrollment');
    }
    public function gallery()
    {
        $data_gallery = Gallery::all();
        return view('gallery', compact('data_gallery'));
    }
    public function alumni()
    {
        $data_alumni = Alumni::paginate(5);
        return view('alumni', compact('data_alumni'));
    }
    public function dashboard()
    {
        return view('dashboard.index');
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
