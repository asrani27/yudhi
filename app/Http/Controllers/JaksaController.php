<?php

namespace App\Http\Controllers;

use App\Models\Jaksa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JaksaController extends Controller
{

    public function index()
    {
        $data = Jaksa::orderBy('id', 'DESC')->paginate(15);
        return view('admin.jaksa.index', compact('data'));
    }

    public function create()
    {
        return view('admin.jaksa.create');
    }
    public function edit($id)
    {
        $data = Jaksa::find($id);
        return view('admin.jaksa.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Jaksa::where('nip', $req->nip)->first();
        if ($check != null) {
            Session::flash('error', 'NIP Sudah Ada');
            return back();
        } else {
            Jaksa::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/jaksa');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Jaksa::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/jaksa');
    }
    public function delete($id)
    {
        $data = Jaksa::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/jaksa');
    }
}
