@extends('layout/main')

@section('title', 'CRUD Laravel') 

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">DAFTAR MAHASISWA</h1>
                
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach( $mahasiswa as $mhs )
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $mhs->nim}}</td>
                            <td>{{ $mhs->nama}}</td>
                            <td>{{ $mhs->jurusan}}</td>
                            <td>{{ $mhs->email}}</td>
                            <td>{{ $mhs->alamat}}</td>
                            <td>
                                <a href="" class="badge bg-success">edit</a>
                                <a href="" class="badge bg-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
@endsection