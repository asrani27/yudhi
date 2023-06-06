<?php

namespace App\Http\Controllers;

use App\Models\Korban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KorbanController extends Controller
{
    public function index()
    {
        $data = Korban::orderBy('id', 'DESC')->paginate(15);
        return view('admin.korban.index', compact('data'));
    }

    public function create()
    {
        return view('admin.korban.create');
    }
    public function edit($id)
    {
        $data = Korban::find($id);
        return view('admin.korban.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Korban::where('nik', $req->nik)->first();
        if ($check != null) {
            Session::flash('error', 'NIK Sudah Ada');
            return back();
        } else {
            korban::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/korban');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Korban::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/korban');
    }
    public function delete($id)
    {
        $data = Korban::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/korban');
    }
}
