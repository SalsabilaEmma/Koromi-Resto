<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class BannerController extends Controller
{
    /**  Admin Side -------------------------------------------------------------------------------------------------- */
    public function list()
    {
        $title = 'Banner';
        $data_banner = Banner::latest()->get();
        // dd($data_banner);
        return view('admin.banner', compact('data_banner', 'title'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'file' => 'required|max:2048'
        ]);
        // if (!File::isDirectory('img/banner/' . $request->id)) {
        //     File::makeDirectory('img/banner/' . $request->id);  /** bikin folder baru tiap upload sesuai id parent */
        // }

        $image = $request->file('file');
        $judulfile = time() . '.' . $image->getClientOriginalExtension();

        Image::make($image)->resize(400, 400, function ($constraint) {
            /** thumbnail */
            $constraint->aspectRatio();
        })->save('img/banner/' . $judulfile);
        $image->move('img/banner-original/', $judulfile);
        /** ukuran file asli */

        $gallery = new Banner;
        $gallery->id = $request->id;
        $gallery->judul = $request->judul;
        $gallery->keterangan = $request->keterangan;
        $gallery->file = $judulfile;
        $gallery->save();
        // dd($gallery);
        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $title = 'Banner';
        $data_banner = Banner::find($id);
        // dd($data_banner->file);
        return view('admin.bannerEdit', compact('data_banner', 'title'));
    }

    public function update(Request $request, Banner $data_banner, $id)
    {
        $data_banner = Banner::findOrfail($id);
        $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if (File::exists(public_path('/img/banner/' . $data_banner->file))) {  // cek didalem id itu ada file/gambare nggak
            // delete file lama
            File::delete(public_path('/img/banner/' . $data_banner->file));
            File::delete(public_path('/img/banner-original/' . $data_banner->file));
        } else {
            return redirect()->back()->with(['error' => 'Data Tidak Ditemukan!']);
        }
        // upload file baru
        $image = $request->file('file');
        $judulfile = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(400, 400, function ($constraint) {  // thumbnail
            $constraint->aspectRatio();
        })->save('img/banner/' . $judulfile);
        $image->move('img/banner-original/', $judulfile); // ukuran file asli
        // perubahan judul & file
        $data_banner->judul = $request->judul;
        $data_banner->keterangan = $request->keterangan;
        $data_banner->file = $judulfile;
        $data_banner->save();
        return redirect()->route('banner.list')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id)
    {
        $data_banner = Banner::findOrfail($id);
        //  && File::exists(public_path('/img/banner-original/'.$data_banner->file))  |   && File::exists(public_path('/img/banner-original/'.$data_banner->file))
        if (File::exists(public_path('/img/banner/' . $data_banner->file))) {
            File::delete(public_path('/img/banner/' . $data_banner->file));
            File::delete(public_path('/img/banner-original/' . $data_banner->file));
            $data_banner->delete();
            return redirect()->back()->with(['error' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->back()->with(['error' => 'Data Tidak Ditemukan!']);
        }

    }
}
