@extends('template1')
@section('title', 'Tagihan Air')
@section('konten')
    <div>
        <br>
        <a href="/eas/create" class="btn btn-success">Tambah Data</a>
    </div>
    <br />
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>No Meteran</th>
            <th>Penggunaan (m³)</th>
            <th>Total Tagihan</th>
        </tr>
        @foreach ($tagihan_air as $t)
            <tr>
                <td>{{ $t->ID }}</td>
                <td>{{ $t->NoMeteran }}</td>
                <td>{{$t->MeterAkhir - $t->MeterAwal }}</td>
                <td>{{number_format(($t->MeterAkhir - $t->MeterAwal)*5000) }}</td>
            </tr>
        @endforeach
    </table>
@endsection
