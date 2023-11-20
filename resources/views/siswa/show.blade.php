@extends('master')
@section('title', 'siswa')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Siswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Siswa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">ID Siswa</label>
                                <input type="text" class="form-control" name="id" id="id" placeholder="Masukkan ID" value="{{ $siswa->id }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{ $siswa->email }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama" value="{{ $siswa->nama }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="jk">jenis kelamin</label>
                                <input type="text" class="form-control" name="lahir" id="lahir" placeholder="" value="{{ $siswa->jk }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">jurusan</label>
                                <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="" value="{{ $siswa->jurusan }}" disabled>
                            </div>

                            <div class="form-group">
                                <label>No. Telepon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="tlp" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka" value="{{ $siswa->tlp }}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan alamat" disabled>{{ $siswa->alamat }}</textarea>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/siswa"><button type="submit" class="btn btn-primary">Kembali</button></a>
                        </div>
                        <!-- /.content -->

                    </div>
                    @endsection