@extends('master')
@section('title', 'absen')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Siswa</h1>
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
                        <div class="card-header">
                            <h3 class="card-title">Data Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('absen.update', $absen->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" id="nis" placeholder="Masukan Kode" value="{{ $absen->nis }}">
                                </div>
                                @error('nis')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukan nama" value="{{ $absen->nama }}">
                                </div>
                                @error('nama')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="Tanggal masuk">Tanggal masuk</label>
                                    <input type="date" class="form-control" name="tanggal_masuk" id="kode" placeholder="Masukan Tanggal masuk" value="{{ $absen->tanggal_masuk }}" >
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <textarea class="form-control @error('kelas') is-invalid @enderror" rows="3" name="kelas" placeholder="Masukan Kelas">{{ $absen->kelas }}</textarea>
                                </div>
                                @error('alamat')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                @error('Tanggal_masuk')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="custom-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ $absen->jenis_kelamin }}">
                                        <option selected>{{ $absen->jenis_kelamin}}</option>
                                        <option value="L">LAKI-LAKI</option>
                                        <option value="P">PEREMPUAN</option>
                                    </select>
                                </div>
                                @error('jenis_kelamin')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select class="custom-select @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ $absen->jurusan}}">
                                        <option selected disabled>Pilih Jurusan</option>
                                        <option selected>{{ $absen->jurusan }}</option>
                                        <option>RPL</option>
                                        <option>DPIB</option>
                                        <option>TP</option>
                                        <option>TFLM</option>
                                        <option>TEI</option>
                                        <option>TITL</option>
                                        <option>TKJ</option>
                                    </select>
                                </div>
                                @error('jurusan')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                    
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <select class="custom-select @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $absen->absen }}">
                                        <option selected disabled>Pilih Keterangan</option>
                                        <option selected>{{ $absen->keterangan }}</option>
                                        <option value="HADIR">Hadir</option>
                                        <option value="IJIN">Ijin</option>
                                        <option value="SAKIT">Sakit</option>
                                        <option value="ALFA">Alfa</option>
                                    </select>
                                </div>
                                @error('keterangan')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('absen.index') }}" class="btn btn-primary">Back</a>
                                <button type="submit" class="btn btn-warning">Update</button>
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