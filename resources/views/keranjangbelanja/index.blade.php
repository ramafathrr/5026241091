@extends('template1')
@section('title', 'Keranjang Belanja')
@section('konten')
    <div>
        <a href="/keranjangbelanja/tambah" class="btn btn-success"> Beli</a>
    </div>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->kodebarang }}</td>
                <td>{{ $b->jumlah }}</td>
                <td>{{ number_format($b->harga, 0, ',', '.') }}</td>
                <td>{{ number_format($b->jumlah * $b->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbelanja/hapus/{{ $b->id }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
