<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class jenisController extends Controller
{
    public function index()
    {
        $jenis = Jenis::latest()->get();
        return view('admin.jenis', compact('jenis'));
    }

    public function store(Request $request)
    {

        Jenis::create([
            'jenisMenu' => $request->jenisMenu
        ]);
        Session::flash('Data Berhasil Ditambahkan!');
        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $jenis = Jenis::all();

        return view('admin.editJenis', compact('jenis'));
    }

    public function update(Request $request, Jenis $jenis, $id)
    {
        $jenis = Jenis::findOrfail($id);
        $jenis->jenis = $request->jenis;
        $jenis->save();

        return redirect()->back()->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $jenis=Jenis::findOrFail($id);
        $jenis->delete();

        return redirect()->back()->with('error', 'Data Berhasil Dihapus!');
    }
}
