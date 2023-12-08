@extends('master')
@section('title', 'jurusan')
@section('content')
<div class="content-wrapper" style="background-color: #BDD8F3">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Jurusan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Jurusan</li>
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
                        <div class="card-header"  style="background-color: #0d4074">
                            <h3 class="card-title">Form Jurusan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">ID Jurusan</label>
                                <input type="text" class="form-control" name="id" id="id jurusan" placeholder="Masukkan ID" value="{{ $jurusan->id}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email">Kepala Jurusan</label>
                                <input type="text" class="form-control" name="kepala_jurusan" id="kepala jurusan" placeholder="Masukan nama" value="{{ $jurusan->kepala_jurusan}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Jurusan</label>
                                <input type="text" class="form-control" name="nama_Jurusan" id="nama Jurusan" placeholder="Masukan Jurusan" value="{{ $jurusan->nama_jurusan }}" disabled>
                        </div>
                        <div class="card-footer">
                            <a href="/jurusan"><button type="submit" class="btn btn-primary">Back</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->
</div>
@endsection