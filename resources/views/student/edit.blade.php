@extends('layout/main')

@section('title', 'Daftar Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1 class="mt-4">Edit Siswa</h1>
            <div class="card">
                <div class="card-body">
                    <form action="/student/{{ $student->id }}" method="post">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $student->nama }}" >
                        </div>
                         <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" id="kelas" value="{{ $student->kelas }}" name="kelas">
                        </div>
                         <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" value="{{ $student->jurusan }}" name="jurusan">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/student" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
