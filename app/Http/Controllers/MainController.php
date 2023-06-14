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
use App\Graduation;
use App\StatusPendaftaran;
use App\Guru;
use App\Principal;

class MainController extends Controller
{
    public function home()
    {
        $data_berita = News::all();
        $data_status = StatusPendaftaran::first();
        $data_principal = Principal::first();
        return view('home', compact('data_berita', 'data_status', 'data_principal'));
    }
    public function profile()
    {
        $data_principal = Principal::first();
        return view('profile', compact('data_principal'));
    }
    public function academic()
    {
        $data_guru = Guru::all();
        return view('academic', compact('data_guru'));
    }
    public function news()
    {
        $data_berita = News::all();
        return view('news.index', compact('data_berita'));
    }
    public function enrollment()
    {
        $data_status = StatusPendaftaran::first();
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
    public function alumni(Request $request)
    {
        $data_tahun_kelulusan = Graduation::all();
        if($data_tahun_kelulusan->count() == 0) {
            return view('alumni', compact('data_tahun_kelulusan'));
        }
        $data_tahun_kelulusan_sekarang = Graduation::where('id', $data_tahun_kelulusan->first()->id)->first();
        $data_alumni = Alumni::where('graduation_id', $data_tahun_kelulusan->first()->id)->get();
        if($request->get('query_tahun')) {
            $data_tahun_kelulusan_sekarang = Graduation::where('id', $request->get('query_tahun'))->first();
            $data_alumni = Alumni::where('graduation_id', $request->get('query_tahun'))->get();
        }
        return view('alumni', compact('data_alumni', 'data_tahun_kelulusan',  'data_tahun_kelulusan_sekarang'));
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
        $data_status = StatusPendaftaran::first();
        return view('dashboard.enrollment.index', compact('data_syarat', 'data_agenda', 'data_biaya', 'data_alur', 'data_status'));
    }
    public function news_detail($id) {
        {
            $news = News::findOrFail($id);
            return view('news.detail', compact('news'));
        }
    }
    public function redirect_dashboard() {
        return redirect('/dashboard');
    }
}
