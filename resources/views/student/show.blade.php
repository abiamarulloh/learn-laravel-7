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

            <div class="card">
                <div class="card-body">
                    <h5>{{$student->nama}}</h5>
                    <p>{{$student->kelas . " " . $student->jurusan}}</p>

                    <a href="{{ $student->id }}/edit" class="btn btn-warning ">edit</a>
                    <form action="{{  $student->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger ">delete</button>
                    </form>
                    
                    <a href="/student">Kembali</a>

                </div>
            </div>        
        </div>
    </div>
</div>
@endsection
