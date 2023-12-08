@extends('master')
@section('title', 'absen')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Absen Siswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">Siswa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header" style="background-color: #0d4074">
                    <h3 class="card-title">Data Siswa</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('absen.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" class="form-control" name="nis" id="NIS" placeholder="Masukkan NISN" >
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="Nama" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <select class="custom-select" name="kelas">
                                <option selected disabled>Pilih kelas</option>
                                <option>12</option>
                                <option>11</option>
                                <option>10</option>
                            </select>
                        <div class="form-group">
                            <label for="Tanggal masuk">Tanggal Masuk</label>
                            <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Masukan Tanggal masuk">
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select class="custom-select" name="jenis_kelamin">
                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select class="custom-select" name="jurusan">
                                <option selected disabled>Pilih Jurusan</option>
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
                            <select class="custom-select" name="keterangan">
                                <option selected disabled>Pilih Keterangan</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Izin">Izin</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
