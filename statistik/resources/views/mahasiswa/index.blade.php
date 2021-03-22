@extends ('layout/main')

@section ('title', 'Daftar Mahasiswa')
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
                        <th scope="col">Nilai</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->nilai }}</td>
                        <td>
                        <a href="#" class="badge bg-success">Edit</a>
                        <a href="#" class="badge bg-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
