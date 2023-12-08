@extends('master')
@section('title', 'pkl')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data PKL</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">PKL</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header"style="background-color: #0d4074">
                    <h3 class="card-title">Data Siswa</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-primary">
                                    </div>
                                        <form action="{{ route('pkl.store') }}" method="POST">
                                            @csrf
                                            <div>
                                                <div class="form-group">
                                                    <label for="genre">Nama</label>
                                                    <select name="siswa_id" id="siswa_id" class="form-control">
                                                    <option disabled selected>-- Pilih Salah Satu--</option>
                                                    @forelse ($siswa as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                    @empty
                                                        <option>--- Data Siswa kosong ---</option>
                                                    @endforelse
                                                    </select>
                                                </div>
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
                                                    <label for="perusahaan">Tempat PKL</label>
                                                    <select name="perusahaan_id" id="perusahaan_id" class="form-control">
                                                    <option disabled selected>-- Pilih Salah Satu--</option>
                                                    @forelse ($perusahaan as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama_perusahaan }}</option>
                                                    @empty
                                                        <option>--- Data Perusahaan---</option>
                                                    @endforelse
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Tanggal_masuk">Tanggal Masuk</label>
                                                    <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Masukan Tanggal masuk">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pembimbing">Pembimbing</label>
                                                    <select name="jurusan_id" id="pembimbing" class="form-control">
                                                    <option disabled selected>-- Pilih Salah Satu--</option>
                                                    @forelse ($jurusan as $item)
                                                        <option value="{{ $item->id }}">{{ $item->kepala_jurusan }}</option>
                                                    @empty
                                                        <option>--- Data Pembimbing---</option>
                                                    @endforelse
                                                    </select>
                                                </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
