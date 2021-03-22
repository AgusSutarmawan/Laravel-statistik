@extends ('layout/main')

@section ('title', 'Tambah Data Mahasiswa')
@section ('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Tambah Data Mahasiswa</h1>
            <form method="POST" action="/students">
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="required" class="form-control" id="nama" required placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
                </div>
                <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" class="form-control" id="nim" required placeholder="Masukkan NIM" name="nim" alue="{{old('nim')}}">
                </div>
                <div>
                    <label for="nilai">Skor</label>
                    <input type="text" class="form-control" id="nilai" required placeholder="Masukkan Skor" name="skor" alue="{{old('skor')}}">
                </div>
                <button type="submit" class="btn btn-dark my-3" >Tambah Data!</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
