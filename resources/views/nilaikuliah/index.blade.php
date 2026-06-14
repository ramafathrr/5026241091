@extends('template1')
@section('title', 'Nilai Kuliah')
@section('konten')
    <div>
        <a href="/nilaikuliah/tambah" class="btn btn-success">Tambah Data</a>
    </div>
    <br />
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $nk)
            <tr>
                <td>{{ $nk->ID }}</td>
                <td>{{ $nk->NRP }}</td>
                <td>{{ $nk->NilaiAngka }}</td>
                <td>{{ $nk->SKS }}</td>
                <td>
                    @if ($nk->NilaiAngka <= 40)
                        D
                    @elseif ($nk->NilaiAngka <= 60)
                        C
                    @elseif ($nk->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>
                <td>{{$nk->NilaiAngka * $nk->SKS }}</td>
            </tr>
        @endforeach
    </table>
@endsection
