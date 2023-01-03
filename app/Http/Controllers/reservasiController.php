<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class reservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //admin
        $reserv = Reservation::latest()->Paginate(25);
        return view('admin.reservasi', compact('reserv'));
    }
    public function indexDetail($id)
    {
        //user
        $reserv = Reservation::where('id', $id)->first();
        return view('admin.detReserv', compact('reserv'));
    }
    public function indexClient()
    {
        //user
        return view('user.c_reservasi');
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
        // dd($request->all());
        // dd(date('Y-m-d', strtotime($request->tanggal)));
        // Reservation::create($request->all());
        $request->validate([
            'name' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'jmlkursi' => 'required',
            'wa' => 'required',
            'email' => 'required',
            // 'note' => 'required',
        ]);

        Reservation::create([
            'name' => $request->name,
            'tanggal' => date('Y-m-d', strtotime($request->tanggal)),
            'waktu' => substr($request->waktu, 0, 5),
            'jmlkursi' => $request->jmlkursi,
            'wa' => $request->wa,
            'email' => $request->email,
            // 'note' => $request->note
        ]);
        return redirect()->back()->with('success', 'Reservasi Berhasil Dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Reservation $reservation, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->name = $request->name;
        $reservation->tanggal = $request->tanggal;
        $reservation->waktu = $request->waktu;
        $reservation->jmlkursi = $request->jmlkursi;
        $reservation->wa = $request->wa;
        $reservation->email = $request->email;
        $reservation->note = $request->note;
        $reservation->save();

        return redirect()->route('reservasi');
    }

    public function destroy($id)
    {
        $reserv = Reservation::findOrFail($id);
        $reserv->delete();
        return redirect()->back()->with('error', 'Data Berhasil Dihapus!');
    }
}
