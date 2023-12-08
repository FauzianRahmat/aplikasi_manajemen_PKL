@extends('master')
@section('title','absen')
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
                        <li class="breadcrumb-item"><a href="">Home</a></li>
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
                        <div class="card-header" style="background-color: #0d4074">
                            <h3 class="card-title">Form Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nis">NISN</label>
                                <input type="number" class=" form-control" name="nis" id="nis" placeholder="Masukan NIS" value="{{ $absen->nis }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class=" form-control" name="nama" id="nama" placeholder="Masukan Nama" value="{{ $absen->nama }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="Kelas">Kelas</label>
                                <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukan Kelas" value="{{ $absen->kelas }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="Tanggal masuk">Tanggal Masuk</label>
                                <input type="date" class="form-control" name="tanggal_masuk" id="kode" placeholder="Masukan Tanggal Masuk" value="{{ $absen->tanggal_masuk }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select class="custom-select" name="jenis_kelamin" disabled>
                                    <option selected disabled>{{ $absen->jenis_kelamin }}</option>
                                    <option value="L">LAKI-LAKI</option>
                                    <option value="P">PEREMPUAN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select class="custom-select" name="jurusan" disabled>
                                    <option selected disabled>{{ $absen->jurusan }}</option>
                                    <option value="RPL">RPL</option>
                                    <option value="DPIB">DPIB</option>
                                    <option value="TP">TP</option>
                                    <option value="TFLM">TFLM</option>
                                    <option value="TEI">TEI</option>
                                    <option value="TITL">TITL</option>
                                    <option value="TKJ">TKJ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <select class="custom-select" name="keterangan"  disabled>
                                    <option selected disabled>{{ $absen->keterangan }}</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Izin">Izin</option>
                                    <option value="Sakit">Sakit</option>
                                </select>
                            </div>
                        </div>
                                
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="{{ route('absen.index') }}" class="btn btn-primary">kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->

    </div>
@endsection