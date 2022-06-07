@extends('layouts.app')

@section('content')
    <div class="container my-4" style="min-height: 61vh;">
        <div class="row text-primary my-4">
            <h2>Data Mahasiswa</h2>
        </div>
        <div class="row gy-4">
            @foreach ($mahasiswas as $mahasiswa)
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title pb-2">{{ $mahasiswa->nama }}</h5>
                                </div>
                                <div class="col-auto">
                                    <a href="/edit/{{ $mahasiswa->nim }}" class="btn btn-success bi bi-pencil"></a>
                                </div>
                                <div class="col-auto">
                                    <form action="/delete/{{ $mahasiswa->nim }}" method="post">
                                        @csrf
                                        @method("delete")
                                        <button class="btn btn-danger bi bi-trash"></button>
                                    </form>
                                </div>
                            </div>
                            <p class="card-text">{{ $mahasiswa->nim }}</p>
                            <p class="card-text">{{ $mahasiswa->alamat }}</p>
                            <p class="card-text">{{ $mahasiswa->email }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection