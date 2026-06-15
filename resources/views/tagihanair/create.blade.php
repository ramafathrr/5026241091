@extends('template1')
@section('title', 'Tambah Data Tagihan Air')
@section('konten')

<br>
    <a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Tagihan Air
        </div>

        <div class="card-body">
            @if ($errors->any())
                <ul style="color: red;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{ route('tagihan_air.store') }}" method="post" onsubmit="return validasiForm()">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="NoMeteran" class="col-sm-2 col-form-label">No Meteran</label>
                    <div class="col-sm-10">
                        <input type="text" name="NoMeteran" id="NoMeteran" class="form-control" maxlength="" required
                            value="{{ old('NoMeteran') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="MeterAwal" class="col-sm-2 col-form-label">Meter Awal</label>
                    <div class="col-sm-10">
                        <input type="text" name="MeterAwal" id="MeterAwal" class="form-control" required=""
                            value="{{ old('MeterAwal') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="MeterAkhir" class="col-sm-2 col-form-label">Meter Akhir</label>
                    <div class="col-sm-10">
                        <input type="text" name="MeterAkhir" id="MeterAkhir" class="form-control" required="" value="{{ old('MeterAkhir') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validasiForm() {
            let NoMeteran = document.getElementById('NoMeteran').value.trim();
            let MeterAwal = document.getElementById('MeterAwal').value.trim();
            let MeterAkhir = document.getElementById('MeterAkhir').value.trim();

            if (!(MeterAkhir > MeterAwal+20)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Meter Akhir harus lebih besar nilainya dari Meter Awal minimal 21",
                    icon: "error"
                });
                return false;
            }
            if(!MeterAwal.match(/^\d+/)){
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Meter Awal harus bernilai angka",
                    icon: "error"
                });
                return false;
            }
            if(!MeterAkhir.match(/^\d+/)){
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Meter Akhir harus bernilai angka",
                    icon: "error"
                });
                return false;
            }
            return true;
        }
    </script>
@endsection

