@extends('master')
@section('title', 'pkl')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail PKL</h1>
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
                            <h3 class="card-title">Data PKL</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-primary">
                                            </div>
                                                <form action="{{ route('pkl.update', $pkl->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                    <div class="form-group">
                                                        <label for="nama">Nama</label>
                                                        <input type="text" class="form-control @error('siswa_id') is-invalid @enderror" name="siswa_id" id="siswa_id" placeholder="Masukan nama" value="{{ $pkl->siswa->nama}}">
                                                    </div>
                                                @error('siswa_id')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="kelas">Kelas</label>
                                                    <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" id="kelas" placeholder="Masukan Kelas" value="{{ $pkl->kelas}}">
                                                </div>
                                                    <div class="form-group">
                                                        <label for="perusahaan_id">Tempat PKL</label>
                                                        <input type="perusahaan_id" class="form-control" name="perusahaan_id" id="kode" placeholder="Masukan Perusahaan" value="{{ $pkl->perusahaan->nama_perusahaan }}" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Tanggal_masuk">Tanggal masuk</label>
                                                        <input type="date" class="form-control" name="tanggal_masuk" id="kode" placeholder="Masukan Tanggal masuk" value="{{ $pkl->tanggal_masuk }}" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jurusan_id">Pembimbing</label>
                                                        <input type="text" class="form-control @error('jurusan_id') is-invalid @enderror" name="jurusan_id" id="jurusan_id" placeholder="Masukan Nama" value="{{ $pkl->jurusan->kepala_jurusan }}">
                                                    </div>
                                                @error('jurusan')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    <div class="card-footer">
                                    <a href="{{ route('pkl.index') }}" class="btn btn-primary">Back</a>
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
</div>

@endsection