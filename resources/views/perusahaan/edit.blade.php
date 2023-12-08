@extends('master')
@section('title', 'perusahaan')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Tempat PKL</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                            <h3 class="card-title">Form Daftar perusahaan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('perusahaan.update', $perusahaan->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">ID Perusahaan</label>
                                    <input type="text" class="form-control" name="id" id="id" placeholder="Masukkan ID" value="{{ $perusahaan->id }}">
                                </div>
                                <div class="form-group">
                                    <label for="nama_perusahaan">Nama Perusahaan</label>
                                    <input type="text" class="form-control" name="nama_perusahaan" id="nama perusahaan" placeholder="Masukan Nama" value="{{ $perusahaan->nama_perusahaan}}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_perusahaan">Alamat Perusahaan</label>
                                    <input type="text" class="form-control" name="alamat_perusahaan" id="alamat perusahaan" placeholder="Masukan Alamat" value="{{ $perusahaan->alamat_perusahaan }}">
                                </div>
                                <div class="form-group">
                                    <label>keterangan</label>
                                    <textarea class="form-control" rows="3" name="keterangan" placeholder="Masukan Keterangan">{{ $perusahaan->keterangan }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('perusahaan.index') }}" class="btn btn-primary">Back</a>
                                <button type="submit" class="btn btn-warning">Update</button>
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