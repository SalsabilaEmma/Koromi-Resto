<?php

namespace App\Http\Controllers;

use App\Models\Booklet;
use App\Models\Jenis;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

class menuController extends Controller
{
    public function index()
    {
        $menu = Menu::latest()->get();
        $jenis = Jenis::latest()->get();
        $imageBooklet = Booklet::latest()->get();
        return view('admin.menu', compact('menu', 'jenis','imageBooklet'));
    }
    public function indexBooklet()
    {
        $menu = Menu::latest()->get();
        $jenis = Jenis::latest()->get();
        $imageBooklet = Booklet::latest()->get();
        return view('admin.booklet', compact('menu', 'jenis','imageBooklet'));
    }
    public function store(Request $request)
    {

        // echo $request->kategori;
        $request->validate([
            'idJenis' => 'required',
            'kategori' => 'required',
            'namaMenu' => 'required',
            'harga' => 'required'
        ]);

        $i = 0;

        foreach ($request->namaMenu as $menu) {
            // echo $request->kategori;
            $menu = Menu::create([
                'idJenis' => $request->idJenis,
                'kategori' => $request->kategori,
                'namaMenu' => $menu,
                // 'harga' => $menu->harga
                'harga' => $request->harga[$i++]
            ]);
        }
        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan!');
    }
    public function storeBooklet(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,bmp,png,jfif,jpeg'
        ]);

        if (!File::isDirectory('img/booklet/' . $request->idbooklet)) {
            File::makeDirectory('img/booklet/' . $request->idbooklet);
        }
        $image = $request->file('image');
        $namafile = time() . '.' . $image->getClientOriginalExtension();

        Image::make($image)->resize(500, 500, function ($constraint) {
            $constraint->aspectRatio();
        })->save('img/booklet/' . $namafile);
        $image->move('img/booklet-original/', $namafile);

        $booklet = new Booklet;
        $booklet->image = $namafile;
        $booklet->save();
        // dd($booklet);
        return redirect()->back()->with('success', 'Data Booklet Berhasil Ditambahkan!');

        // $request->validate([
        //     "image" => "required|image|mimes:jpeg,png,jpg,gif,svg",
        // ]);
        // $imageBooklet = rand() . '_' . $request->image->getClientOriginalName();

        // $request->image->move(public_path('booklet'), $imageBooklet);

        // $booklet = new Booklet;
        // // dd($booklet);
        // // $booklet->image = $namafile;
        // $booklet->save();

        // return redirect()->back()->with('success', 'Data Booklet Berhasil Ditambahkan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $jenis = Jenis::all();
        $menu = Menu::findOrFail($id);

        return view('admin.editMenu', compact('jenis', 'menu'));
    }

    public function update(Request $request, Menu $menu, $id)
    {
        $menu = Menu::findOrfail($id);
        $menu->idJenis = $request->idJenis;
        $menu->namaMenu = $request->namaMenu;
        $menu->harga = $request->harga;
        $menu->save();

        return redirect()->route('index.menu')->with('success','Berhasil Diedit !');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->back()->with('error','Data Berhasil Dihapus !');
    }
    public function destroyBooklet($id)
    {
        $imageBooklet = Booklet::findOrFail($id);
        if (File::exists(public_path('/img/booklet/' . $imageBooklet->file))) {
            File::delete(public_path('/img/booklet/' . $imageBooklet->file));
            File::delete(public_path('/img/booklet-original/' . $imageBooklet->file));
            $imageBooklet->delete();
            return redirect()->back()->with(['error' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->back()->with(['error' => 'Data Tidak Ditemukan!']);
        }

        return redirect()->back()->with('error', 'Data Berhasil Dihapus!');
    }
}
