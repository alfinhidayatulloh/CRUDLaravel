@extends('layout/main')

@section('title', 'Form Tambah Data Mahasiswa') 

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
                
                <form method="post" action="/students">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan nim" name="nim" value="{{ old('nim') }}">
                        @error('nim')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{ old('jurusan') }}">
                        @error('jurusan')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan alamat" name="alamat" value="{{ old('alamat') }}">
                        @error('alamat')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambahkan Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection