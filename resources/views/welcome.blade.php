@extends('master')
@section('title','welcome')
@section('content')
<style>
    .cards {
        display: flex;
        flex-direction: row;
        gap: 15px;
        justify-content: center; /* Center the cards horizontally */
    }

    .cards .red {
        background-color: #04285e;
    }

    .cards .blue {
        background-color: #04285e;
    }

    .cards .green {
        background-color: #04285e;
    }

    .cards .yellow {
        background-color: #c9f113;
    }

    .cards .yellow {
        background-color: #c9f113;
    }

    .cards .card {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        height: 150px;
        width: 200px;
        border-radius: 10px;
        color: white;
        cursor: pointer;
        transition: 400ms;
    }

    .cards .card p.tip {
        font-size: 1em;
        font-weight: 700;
    }

    .cards .card p.second-text {
        font-size: .7em;
    }

    .cards .card:hover {
        transform: scale(1.2, 1.2);
    }

    .cards:hover > .card:not(:hover) {
        filter: blur(10px);
        transform: scale(0.9, 0.9);
    }
</style>
<div class="content-wrapper"  style="background-color: #BDD8F3">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{ Auth::user()->name}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="cards">
                    <div class="card blue">
                        <p class="tip">DATA</p>
                        <p class="second-text">Siswa</p>
                        <a href="/siswa/" class="small-box-footer">Klik di sini <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="card blue">
                        <p class="tip">DATA</p>
                        <p class="second-text">Jurusan</p>
                        <a href="/jurusan/" class="small-box-footer">Klik di sini <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="card green">
                        <p class="tip">DATA</p>
                        <p class="second-text">Perusahaan</p>
                        <a href="/perusahaan/" class="small-box-footer">Klik di sini <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cards">
                    <div class="card blue">
                        <p class="tip">DATA</p>
                        <p class="second-text">Absensi</p>
                        <a href="/absen/" class="small-box-footer">Klik di sini <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="card blue">
                        <p class="tip">DATA</p>
                        <p class="second-text">PKL</p>
                        <a href="/pkl/" class="small-box-footer">Klik di sini <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="card blue">
                        <p class="tip">DATA</p>
                        <p class="second-text">Dokumentasi</p>
                        <a href="/dokumentasi/" class="small-box-footer">Klik di sini <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
