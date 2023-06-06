<?php

namespace App\Http\Controllers;

use App\Models\Penyidik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenyidikController extends Controller
{
    public function index()
    {
        $data = Penyidik::orderBy('id', 'DESC')->paginate(15);
        return view('admin.penyidik.index', compact('data'));
    }

    public function create()
    {
        return view('admin.penyidik.create');
    }
    public function edit($id)
    {
        $data = Penyidik::find($id);
        return view('admin.penyidik.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Penyidik::where('nip', $req->nip)->first();
        if ($check != null) {
            Session::flash('error', 'NIP Sudah Ada');
            return back();
        } else {
            Penyidik::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/penyidik');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Penyidik::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penyidik');
    }
    public function delete($id)
    {
        $data = Penyidik::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penyidik');
    }
}
