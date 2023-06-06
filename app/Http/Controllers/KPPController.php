<?php

namespace App\Http\Controllers;

use App\Models\Korban;
use App\Models\KPP;
use App\Models\Penyidik;
use App\Models\Tersangka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KPPController extends Controller
{
    public function index()
    {
        $data = KPP::orderBy('id', 'DESC')->paginate(15);
        return view('admin.kpp.index', compact('data'));
    }

    public function create()
    {
        $penyidik = Penyidik::get();
        $tersangka = Tersangka::get();
        $korban = Korban::get();
        return view('admin.kpp.create', compact('penyidik', 'tersangka', 'korban'));
    }
    public function edit($id)
    {
        $data = KPP::find($id);
        $penyidik = Penyidik::get();
        $tersangka = Tersangka::get();
        $korban = Korban::get();
        return view('admin.kpp.edit', compact('data', 'penyidik', 'tersangka', 'korban'));
    }
    public function store(Request $req)
    {
        KPP::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/kpp');
    }
    public function update(Request $req, $id)
    {
        $data = KPP::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/kpp');
    }
    public function delete($id)
    {
        $data = KPP::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/kpp');
    }
}
