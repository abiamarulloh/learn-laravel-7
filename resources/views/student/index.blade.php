@extends('layout/main')

@section('title', 'Daftar Siswa')



@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1 class="mt-4">Daftar Siswa</h1>
            @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <a href="/student/create/" class="btn btn-primary my-2">Tambah Murid</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student) 
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $student->nama }}</td>
                            <td>
                                <a href="/student/{{ $student->id }}" class="badge badge-info">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
    </div>
</div>
@endsection
