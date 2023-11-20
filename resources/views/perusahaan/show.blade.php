@extends('master')
@section('title', 'perusahaan')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Perusahaan </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Perusahaan</li>
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
                            <h3 class="card-title">Form Daftar Perusahaan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">ID Perusahaan</label>
                                <input type="text" class="form-control" name="id" id="id" placeholder="Masukkan ID" value="{{ $perusahaan->id }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama_perusahaan">Nama Perusahaan</label>
                                <input type="text" class="form-control" name="nama_perusahaan" id="nama perusahaan" placeholder="Masukan Nama" value="{{ $perusahaan->nama_perusahaan }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="alamat_perusahaan">Alamat Perusahaan</label>
                                <input type="text" class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Masukan Alamat" value="{{ $perusahaan->alamat_perusahaan }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>keterangan</label>
                                <textarea class="form-control" rows="3" name="keterangan" placeholder="Masukan Keterangan" disabled>{{ $perusahaan->keterangan }}</textarea>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/perusahaan"><button type="submit" class="btn btn-primary">Kembali</button></a>
                        </div>
                        <!-- /.content -->

                    </div>
                    @endsection