@extends('template1')
@section('title', 'Data Snack')
@section('konten')

    <h2>Tambah Snack</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/snack/store" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>Kode Snack</label><br>
            <input type="hidden" name="kodesnack" id="kodesnack" maxlength="10" value="{{ old('kodesnack') }}">
        </p>

        <p>
            <label>Merk Snack</label><br>
            <input type="text" name="merksnack" id="merksnack" maxlength="30" value="{{ old('merksnack') }}">
        </p>

        <p>
            <label>Stock Snack</label><br>
            <input type="text" name="stocksnack" id="stocksnack" maxlength="10" value="{{ old('stocksnack') }}">
        </p>

        <p>
            <label>Tersedia</label><br>
            <input type="text" name="tersedia" id="tersedia" maxlength="1" value="{{ old('tersedia') }}">
        </p>

        <button type="submit">Simpan</button>
        <a href="/snack">Kembali</a>
    </form>

@endsection
