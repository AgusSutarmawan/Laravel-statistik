@extends ('layout/main')

@section ('title', 'Ubah Data Mahasiswa')
@section ('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Edit Data Mahasiswa</h1>
            <form method="POST" action="{{$student->id}}">
            @method('put')
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="required" class="form-control" id="nama" required placeholder="Masukkan Nama" name="nama" value="{{$student->nama}}">
                </div>
                <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" class="form-control" id="nim" required placeholder="Masukkan NIM" name="nim" value="{{$student->nim}}">
                </div>
                <div>
                    <label for="nilai">Skor</label>
                    <input type="text" class="form-control" id="nilai" required placeholder="Masukkan Skor" name="skor" value="{{$student->skor}}">
                </div>
                <button type="submit" class="btn btn-dark my-3" >Ubah Data!</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
