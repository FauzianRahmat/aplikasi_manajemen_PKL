@extends('master')
@section('title', 'jurusan')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" >
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Jurusan</h1>
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
                            <h3 class="card-title">Form jurusan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nisn">ID Jurusan</label>
                                    <input type="text" class="form-control" name="id" id="id" placeholder="Masukkan ID" value="{{ $jurusan->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="kepala_jurusan">Kepala Jurusan</label>
                                    <input type="text" class="form-control" name="kepala_jurusan" id="kepala_jurusan" placeholder="Masukan Nama" value="{{ $jurusan->kepala_jurusan}}">
                                </div>
                                <div class="form-group">
                                    <label for="nama_jurusan">Jurusan</label>
                                    <input type="text" class="form-control" name="nama_jurusan" id="kepala_jurusan" placeholder="Masukan Nama" value="{{ $jurusan->nama_jurusan}}">
                                </div>
                            <div class="card-footer">
                                <a href="{{ route('jurusan.index') }}" class="btn btn-primary">Back</a>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- /.content -->
    </form>
</div>
@endsection