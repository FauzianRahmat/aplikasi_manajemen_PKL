@extends('master')
@section('title', 'perusahaan')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Perusahaan</h1>
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
                        <div class="card-header" style="background-color: #0d4074">
                            <h3 class="card-title">Form daftar Perusahaan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('perusahaan.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">ID Perusahaan</label>
                                    <input type="text" class="form-control" name="id" id="id" placeholder="Masukkan ID">
                                </div>
                            <div class="form-group">
                                    <label for="nama_perusahaan">Nama Perusahaan</label>
                                    <input type="text" class="form-control" name="nama_perusahaan" id="nama" placeholder="Masukan nama">
                                </div>
                            <div class="form-group">
                                    <label for="alama_ perusahaan">Alamat Perusahaan</label>
                                    <input type="text" class="form-control" name="alamat_perusahaan" id="alamat perusahaan" placeholder="Masukan Alamat">
                                </div>
                            <div class="form-group">
                                <label>keterangan</label>
                                <textarea class="form-control" rows="3" name="keterangan" placeholder="Masukan keterangan"></textarea>
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
</div>
@endsection