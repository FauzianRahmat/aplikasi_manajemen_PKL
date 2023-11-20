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
        width: 150px;
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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Prakerin</li>
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
                        <p class="tip">Data Siswa</p>
                        <p class="second-text"></p>
                        <a href="/siswa/" class="small-box-footer">Klik di sini <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="card blue">
                        <p class="tip">Jurusan</p>
                        <p class="second-text"></p>
                        <a href="/jurusan/" class="small-box-footer">Klik di sini <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="card green">
                        <p class="tip">Perusahaan</p>
                        <p class="second-text"></p>
                        <a href="/perusahaan/" class="small-box-footer">Klik di sini <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cards">
                    <div class="card blue">
                        <p class="tip">Absen</p>
                        <p class="second-text"></p>
                        <a href="/absen/" class="small-box-footer">Klik di sini <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="card green">
                        <p class="tip">Dokumentasi</p>
                        <p class="second-text"></p>
                        <a href="/jurusan/" class="small-box-footer">Klik di sini <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
