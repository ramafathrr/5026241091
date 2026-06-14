@extends('template1')
@section('title', 'Data Snack')
@section('konten')

    <h2>Edit Snack</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/snack/update" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>Kode Snack</label><br>
            <input type="hidden" name="kodesnack" id="kodesnack" maxlength="10" value="{{ old('kodesnack', $snack->kodesnack) }}">
        </p>

        <p>
            <label>Merk Snack</label><br>
            <input type="text" name="merksnack" id="merksnack" maxlength="30" value="{{ old('merksnack', $snack->merksnack) }}">
        </p>

        <p>
            <label>Stock Snack</label><br>
            <input type="text" name="stocksnack" id="stocksnack" maxlength="10" value="{{ old('stocksnack', $snack->stocksnack) }}">
        </p>

        <p>
            <label>Tersedia</label><br>
            <input type="text" name="tersedia" id="tersedia" maxlength="1"
                value="{{ old('tersedia', $snack->tersedia) }}">
        </p>

        <button type="submit" class="btn btn-primary mb-4">Update</button>
        <a href="/snack" class="btn btn-secondary mb-4">Kembali</a>
    </form>

@endsection
