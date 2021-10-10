<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Anggota;
use App\Models\Buku;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::get();
        $anggota   = Anggota::get();
        $buku      = Buku::get();
        if(Auth::user()->level == 'user')
        {
            $datas = Transaksi::where('status', 'pinjam')
                                ->where('anggota_id', Auth::user()->anggota->id)
                                ->get();
        } else {
            $datas = Transaksi::where('status', 'pinjam')->get();
        }
        return view('home', compact('transaksi', 'anggota', 'buku', 'datas'));
    }
}
