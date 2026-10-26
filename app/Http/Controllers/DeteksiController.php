<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeteksiHama;

class DeteksiController extends Controller
{
    public function prosesData(Request $request)
    {
        $validated = $request->validate([
            'lokasi' => 'required',
            'nama_tanaman' => 'required',
            'jenis_hama' => 'required',
            'confidence_score' => 'required|numeric',
            'tingkat_kerusakan' => 'required|numeric',
        ]);

        $confidence = $validated['confidence_score'];

        if ($confidence < 50) {
            $status = 'Tidak Pasti';
            $rekomendasi = 'Perlu verifikasi manual oleh petugas';
        } elseif ($confidence <= 80) {
            $status = 'Indikasi Hama';
            $rekomendasi = 'Lakukan pemantauan intensif';
        } else {
            $status = 'Hama Terkonfirmasi';
            $rekomendasi = 'Segera lakukan pengendalian hama';
        }

        $deteksi = DeteksiHama::create([
            'lokasi' => $validated['lokasi'],
            'nama_tanaman' => $validated['nama_tanaman'],
            'jenis_hama' => $validated['jenis_hama'],
            'confidence_score' => $confidence,
            'tingkat_kerusakan' => $validated['tingkat_kerusakan'],
            'status_deteksi' => $status,
        ]);

        return view('hasil', compact('deteksi', 'rekomendasi'));
    }

    public function riwayat()
    {
        $riwayats = DeteksiHama::orderBy('created_at', 'desc')->get();
        return view('riwayat', compact('riwayats'));
    }
}

