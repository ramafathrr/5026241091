@extends('template1')
@section('title', 'Tambah Data Keranjang Belanja')
@section('konten')

    <a href="/keranjangbelanja" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Beli
        </div>

        <div class="card-body">
            <form action="/keranjangbelanja/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kodebarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="number" name="kodebarang" id="kodebarang" class="form-control" maxlength="30" required="">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlah" id="jumlah" class="form-control" required="">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" name="harga" id="harga" class="form-control" required="">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Beli" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
