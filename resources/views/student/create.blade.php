@extends('layout/main')

@section('title', 'Daftar Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1 class="mt-4">Tambah Siswa</h1>
            <div class="card">
                <div class="card-body">
                    <form action="/student" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                Nama tidak boleh kosong.
                            </div>
                            @enderror

                        </div>
                         <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control  @error('kelas') is-invalid @enderror" id="kelas" name="kelas" value="{{ old('kelas') }}">
                             @error('kelas')
                            <div class="invalid-feedback">
                                kelas tidak boleh kosong.
                            </div>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control  @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ old('jurusan') }}">
                             @error('jurusan')
                            <div class="invalid-feedback">
                                Jurusan tidak boleh kosong.
                            </div>
                            @enderror
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
