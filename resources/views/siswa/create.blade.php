@extends('master')
@section('title', 'Siswa')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Siswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">siswa</li>   
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" >
        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #0d4074">
                            <h3 class="card-title">Form Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('siswa.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">NISN</label>
                                    <input type="text" class="form-control" name="id" id="id" placeholder="Masukkan NISN">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Masukan email">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama">
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal_Lahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="custom-select" name="jenis_kelamin">
                                        <option selected disabled></option>
                                        <option>LAKI-LAKI</option>
                                        <option>PERUMPUAN</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select class="custom-select" name="jurusan">
                                        <option selected disabled>Pilih Jurusan</option>
                                        <option>RPL</option>
                                        <option>DPIB</option>
                                        <option>TP</option>
                                        <option>TFLM</option>
                                        <option>TEI</option>
                                        <option>TITL</option>
                                        <option>TKJ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan alamat"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection