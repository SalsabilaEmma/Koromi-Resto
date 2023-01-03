<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use App\Models\About;
use App\Models\Banner;
use App\Models\Booklet;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Jenis;
use App\Models\Menu;

class userController extends Controller
{
    public function boot()
    {
        //fix for pagination making weird oversize by using bootstraps paginator
        Paginator::useBootstrap();
    }

    public function index()
    {
        $menu = Menu::latest()->paginate(20);
        $food = Menu::where('kategori', '=', 'Makanan')->paginate(14);
        $snack = Menu::where('kategori', '=', 'Snack')->paginate(14);
        $drink = Menu::where('kategori', '=', 'Minuman')->paginate(14);
        $jenis = Jenis::latest()->get();
        $image = Gallery::latest()->get();
        $banner = Banner::latest()->get();
        $about = About::latest()->get();
        // $menu = Menu::latest()->get();
        // $menu = Menu::latest()->paginate(10);
        return view('user.index', compact('menu', 'jenis', 'image', 'banner', 'about', 'menu', 'food', 'snack', 'drink'));
    }

    public function menu()
    {
        $menu = Menu::latest()->get();
        $food = Menu::where('kategori', '=', 'Makanan')->paginate(20);
        $snack = Menu::where('kategori', '=', 'Snack')->paginate(20);
        $drink = Menu::where('kategori', '=', 'Minuman')->paginate(20);
        $booklets = Booklet::latest()->get();
        $jenis = Jenis::latest()->get();
        $gallery = Gallery::latest()->get();
        $imageBooklet = Booklet::latest()->get();
        return view('user.menu', compact('menu', 'jenis', 'imageBooklet', 'food', 'snack', 'drink', 'booklets', 'gallery'));
    }

    public function gallery()
    {
        $gallery = Gallery::latest()->paginate(8);
        return view('user.gallery', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
