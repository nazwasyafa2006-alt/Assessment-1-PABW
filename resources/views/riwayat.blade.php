@extends('layouts.main')

@section('content')
    <h2>Riwayat Deteksi Hama</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Lokasi</th>
                <th>Tanaman</th>
                <th>Jenis Hama</th>
                <th>Confidence</th>
                <th>Kerusakan</th>
                <th>Status</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @forelse($riwayats as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->nama_tanaman }}</td>
                    <td>{{ $item->jenis_hama }}</td>
                    <td>{{ $item->confidence_score }}%</td>
                    <td>{{ $item->tingkat_kerusakan }}%</td>
                    <td>{{ $item->status_deteksi }}</td>
                    <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Belum ada data riwayat deteksi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection