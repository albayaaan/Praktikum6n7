@extends('layouts.app')

@section('content')
    <div class="container mt-4" style="min-height: 61vh;">
        <div class="row text-primary my-4">
            <h2>Input Data Mahasiswa</h2>
        </div>
        <form action="/input" method="post" class="mx-5 mt-5">
            @csrf
            <div class="row  mb-2">
                <div class="col">
                    <label for="input1" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="input1" name="nama">
                </div>
                <div class="col">
                    <label for="input2" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="input2" name="email">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <label for="input3" class="form-label">NIM</label>
                    <input type="number" class="form-control" id="input3" name="nim">
                </div>
                <div class="col">
                    <label for="input4" class="form-label">Alamat Rumah</label>
                    <input type="text" class="form-control" id="input4" name="alamat">
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Submit Data</button>
                </div>
            </div>
        </form>
    </div>
@endsection