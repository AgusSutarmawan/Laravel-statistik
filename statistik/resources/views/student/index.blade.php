@extends ('layout/main')

@section ('title', 'Daftar Mahasiswa')
@section ('container')
<div class="container">
    <div class="row">
        <div class="col-10">
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
            <div class="row">
                <div class="col-6">
            <a href="/students/create" class="btn btn-dark my-1">Input</a>
            </div>
            <div class="col-6">
                        <table class="table table-striped ">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Skor</th>
                                    <th scope="col">Frekuensi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($frekuensi as $skor)
                                <tr>
                                    <td> {{ $skor->skor }} </td>
                                    <td> {{ $skor->frekuensi }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td> <b>Total Frekuensi =</b>  </td>
                                    <td> {{ $totalfrekuensi }}</td>
                                </tr>
                                <tr>
                                    <td> <b>Nilai MAX =</b></td>
                                    <td>{{$max}}</td>
                                </tr>
                                <tr>
                                    <td> <b>Nilai MIN =</b></td>
                                    <td>{{$min}}</td>
                                </tr>
                                <tr>
                                    <td> <b>Rata-rata =</b></td>
                                    <td>{{$avg}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            </div>

    </div>
    </div>
</div>
</div>
@endsection
