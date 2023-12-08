@extends('master')
@section('title','pkl')
@section('content')
<div class="content-wrapper" style="background-color: #BDD8F3">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">PKL</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">PKL</li>
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
                            <h3 class="card-title">Form PKL</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class=" form-control" name="nama" id="nama" placeholder="Masukan Nama" value="{{ $pkl->siswa->nama}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="Kelas">Kelas</label>
                                <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukan Kelas" value="{{ $pkl->kelas }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="tempat_pkl">Tempat PKL</label>
                                <input type="perusahaan_id" class="form-control" name="perusahaan_id" id="tempat_pkl" placeholder="Masukan Perusahaan" value="{{ $pkl->perusahaan->nama_perusahaan}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="Tanggal masuk">Tanggal Masuk</label>
                                <input type="date" class="form-control" name="tanggal_masuk" id="kode" placeholder="Masukan Tanggal Masuk" value="{{ $pkl->tanggal_masuk }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="pembimbing">Pembimbing</label>
                                <input type="pembimbing" class="form-control" name="jurusan_id" id="pembimbing" placeholder="Masukan Nama" value="{{ $pkl->jurusan->kepala_jurusan}}" disabled>
                            </div>
                        </div>
                                
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="{{ route('pkl.index') }}" class="btn btn-primary">kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->

    </div>
@endsection