@extends('template1')
@section('title', 'Edit Data Snack')
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

        <div class="row mb-3">
                    <label for="kodesnack" class="col-sm-2 col-form-label">Kode Snack</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="kodesnack" id="kodesnack" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="merksnack" class="col-sm-2 col-form-label">Merk Snack</label>
                    <div class="col-sm-10">
                        <input type="text" name="merksnack" id="merksnack" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stocksnack" class="col-sm-2 col-form-label">Stock Snack</label>
                    <div class="col-sm-10">
                        <input type="text" name="stocksnack" id="stocksnack" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Tersedia" class="col-sm-2 col-form-label">Tersedia</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="tersedia" id="tersedia" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>
    </form>

@endsection
