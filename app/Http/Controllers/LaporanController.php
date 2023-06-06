<?php

namespace App\Http\Controllers;

use App\Models\KPP;
use App\Models\Desa;
use App\Models\KPA;
use App\Models\Mati;
use App\Models\Lahir;
use App\Models\Nikah;
use App\Models\Usaha;
use App\Models\Penduduk;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{

    public function index()
    {
        return view('admin.laporan.index');
    }
    public function kpp()
    {
        $data = KPP::get();
        return view('admin.laporan.kpp', compact('data'));
    }
    public function kpa()
    {
        $data = KPA::get();
        return view('admin.laporan.kpa', compact('data'));
    }
}
