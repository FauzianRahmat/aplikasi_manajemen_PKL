@extends('master')
@section('title', 'dokumentasi')
@section('content')
<div class="content-wrapper" style="background-color: #BDD8F3">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Dokumentasi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dokumentasi</li>
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
                        <div class="card-header" style="background-color: #0d4074">
                            <h3 class="card-title">Form Dokumentasi</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="text" class="form-control" name="id" id="nisn" placeholder="Masukkan NISN" value="{{ $dokumentasi[0]->id }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama" value="{{ $dokumentasi[0]->nama }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukkan kelas" value="{{ $dokumentasi[0]->kelas }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">jurusan</label>
                                <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="" value="{{ $dokumentasi[0]->jurusan }}" disabled>
                                <div class="form-group">
                                    <label for="laporan">Sertifikat</label>
                                    <input type="text" class="form-control" name="laporan" id="laporan" placeholder="" value="{{ $dokumentasi[0]->laporan}}" disabled>
                                <div class="form-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/dokumentasi"><button type="submit" class="btn btn-primary">Kembali</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->
@endsection