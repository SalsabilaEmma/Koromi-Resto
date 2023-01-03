<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /** User */
    public function index()
    {
        return view('user.kontak');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'subjek' => 'required',
            'isi' => 'required',
        ]);
        Kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'isi' => $request->isi,
        ]);
        return redirect()->back()->with('success', 'Berhasil Mengirim Pesan!');
    }

    /** Admin */
    public function list()
    {
        $title = 'Kontak';
        $data_kontak = Kontak::latest()->get();
        return view('admin.kontak', compact('data_kontak','title'));
    }

    public function detail($id)
    {
        $title = 'Kontak';
        $data_kontak = Kontak::findOrFail($id);
        return view('admin.kontakDetail', compact('data_kontak', 'title'));
    }

    public function destroy($id)
    {
        $data_kontak = Kontak::findOrfail($id);
        $data_kontak->delete();
        return redirect()->back()->with(['error' => 'Data Berhasil Dihapus!']);
    }
}
