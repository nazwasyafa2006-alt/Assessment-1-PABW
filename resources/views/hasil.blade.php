@extends('layouts.main')

@section('content')
    <h2>Hasil Deteksi Hama</h2>
    <table>
        <tr><th>Lokasi</th><td>{{ $deteksi->lokasi }}</td></tr>
        <tr><th>Nama Tanaman</th><td>{{ $deteksi->nama_tanaman }}</td></tr>
        <tr><th>Jenis Hama</th><td>{{ $deteksi->jenis_hama }}</td></tr>
        <tr><th>Confidence Score</th><td>{{ $deteksi->confidence_score }}%</td></tr>
        <tr><th>Tingkat Kerusakan</th><td>{{ $deteksi->tingkat_kerusakan }}%</td></tr>
        <tr>
            <th>Status Deteksi</th>
            <td>
                @if($deteksi->status_deteksi == 'Tidak Pasti')
                    <span style="color: orange; font-weight: bold;">Tidak Pasti</span>
                @elseif($deteksi->status_deteksi == 'Indikasi Hama')
                    <span style="color: blue; font-weight: bold;">Indikasi Hama</span>
                @else
                    <span style="color: red; font-weight: bold;">Hama Terkonfirmasi</span>
                @endif
            </td>
        </tr>
        <tr><th>Rekomendasi</th><td>{{ $rekomendasi }}</td></tr>
    </table>
    <br>
    <a href="{{ route('deteksi') }}" class="btn">Input Lagi</a>
@endsection