<?php

namespace App\Http\Controllers;

use App\Models\KPA;
use App\Models\Korban;
use App\Models\Penyidik;
use App\Models\Tersangka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KPAController extends Controller
{
    public function index()
    {
        $data = KPA::orderBy('id', 'DESC')->paginate(15);
        return view('admin.kpa.index', compact('data'));
    }

    public function create()
    {
        $penyidik = Penyidik::get();
        $tersangka = Tersangka::get();
        $korban = Korban::get();
        return view('admin.kpa.create', compact('penyidik', 'tersangka', 'korban'));
    }
    public function edit($id)
    {
        $data = KPA::find($id);
        $penyidik = Penyidik::get();
        $tersangka = Tersangka::get();
        $korban = Korban::get();
        return view('admin.kpa.edit', compact('data', 'penyidik', 'tersangka', 'korban'));
    }
    public function store(Request $req)
    {
        KPA::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/kpa');
    }
    public function update(Request $req, $id)
    {
        $data = KPA::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/kpa');
    }
    public function delete($id)
    {
        $data = KPA::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/kpa');
    }
}
