@extends('template1')
@section('judul_halaman', 'Data Siswa')
@section('konten')

    <h2>Data Snack</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="/snack/tambah" class="btn btn-success">Tambah Snack Baru</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Snack</th>
            <th>Merk Snack</th>
            <th>Stock Snack</th>
            <th>Tersedia</th>
            <th>Action</th>
        </tr>

        @foreach($snack as $s)
            <tr>
                <td>{{ $s->kodesnack }}</td>
                <td>{{ $s->merksnack }}</td>
                <td>{{ $s->stocksnack }}</td>
                <td>{{ $s->tersedia }}</td>
                <td>
                    <a href="/snack/edit/{{ $s->kodesnack }}" class="btn btn-warning">Edit</a>

                    <a href="/snack/hapus/{{ $s->kodesnack }}" type="submit" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $snack->links() }}
@endsection
