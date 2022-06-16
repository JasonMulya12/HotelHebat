<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF(Pemesanan $pemesanan, $id)
    {
        $pemesanan = $pemesanan->get()->where('id', $id);

        echo $pemesanan;

        $data = [
             'title' => 'Welcome to HotelHebat',
             'id' => '$pemesanan->id',
             'nama_tamu' => '$pemesanan->nama_tamu',
             'email' => '$pemesanan->email',
             'no_hp' => '$pemesanan->no_hp',
             'tipe_kamar' => '$pemesanan->tipe_kamar',
             'tgl_check_in' => '$pemesanan->tgl_check_in',
             'tgl_check_out' => '$pemesanan->tgl_check_out',
            'pemesanan' => $pemesanan
        ];

        $pdf = PDF::loadView('pemesanan.myPDF', $data);

        return $pdf->download('buktipemesanan.pdf');

    }
}
