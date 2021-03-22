@extends ('layout/main')

@section ('title', 'Rata-rata Skor')
@section ('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Skor</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($students as $std)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{ $std->nama}}</td>
                        <td>{{ $std->nim }}</td>
                        <td>{{ $std->skor }}</td>
                        <td>
                        <a href="/edit/{{$std->id}}" class="btn btn-primary">Edit</a>
                        <form name="delete" action="/delete/{{$std->id}}" method="POST" class="d-inline">
                           @method('delete')
                           @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/students/create" class="btn btn-primary my-3">Insert</a>
            <a href="/students/operations" class="btn btn-primary my-2">Rata-rata</a>
            <a href="/students/operations" class="btn btn-primary my-2">Skor MIN</a>
            <a href="/students/operations" class="btn btn-primary my-2">Skor MAX</a>
            <div class="row">
                <div class="col-10">
                    <h1 class="mt-3">Rata-rata</h1>
                    <p>Menghitung Nilai Rata-rata Siswa dengan PHP</p>
        </div>
    </div>
</div>
</div>
@endsection
