@extends('layouts.main')

@section('content')
    <h2>Form Input Hasil Deteksi Hama</h2>
    <form action="{{ route('hasil-deteksi') }}" method="POST">
        @csrf
        <p>
            <label>Lokasi Lahan:</label><br>
            <select name="lokasi" required>
                <option value="Garut Kota">Garut Kota</option>
                <option value="Tarogong Kaler">Tarogong Kaler</option>
                <option value="Samarang">Samarang</option>
            </select>
        </p>
        <p>
            <label>Nama Tanaman:</label><br>
            <input type="text" name="nama_tanaman" placeholder="Padi, Jagung, Cabai" required>
        </p>
        <p>
            <label>Jenis Hama Hasil Prediksi:</label><br>
            <input type="text" name="jenis_hama" placeholder="Wereng Cokelat, Ulat Grayak" required>
        </p>
        <p>
            <label>Confidence Score (%):</label><br>
            <input type="number" name="confidence_score" min="0" max="100" required>
        </p>
        <p>
            <label>Tingkat Kerusakan Daun (%):</label><br>
            <input type="number" step="0.1" name="tingkat_kerusakan" min="0" max="100" required>
        </p>
        <button type="submit" class="btn">Proses Deteksi</button>
    </form>
@endsection