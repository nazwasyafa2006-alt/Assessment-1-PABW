@extends('layouts.main')

@section('content')
    <h2>Tentang AgriVision Garut</h2>
    <p>Tujuan sistem ini adalah untuk mengidentifikasi serangan hama secara dini menggunakan Computer Vision.</p>
    
    <h3>Lokasi Deteksi</h3>
    <ul>
        <li>Kecamatan Garut Kota</li>
        <li>Kecamatan Tarogong Kaler</li>
        <li>Kecamatan Samarang</li>
    </ul>

    <h3>Parameter Hasil Deteksi</h3>
    <ul>
        <li>Jenis Hama</li>
        <li>Confidence Score (%)</li>
        <li>Tingkat Kerusakan Daun (%)</li>
    </ul>

    <h3>Model Klasifikasi</h3>
    <p>Menggunakan model EfficientNet-BO.</p>
@endsection