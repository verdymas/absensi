@extends('layout.Admin')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Welcome {{auth()->user()->name}} !</h3>
            <div class="d-flex align-items-center">
            </div>
        </div>
    </div>
</div>
<!-- <div class="container-fluid">
    <div class="card-group">
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium"></h2>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Belum Verifikasi</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 font-weight-medium"></h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Verifikasi HIMA</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium"></h2>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Verifikasi BEM</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 font-weight-medium"></h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Validasi DPK</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12 offset-lg-5">
                        <img src="/admin/assets/images/logokampus.png" style="width:15%;">
                        <div class="mt-2"></div>
                    </div>
                    <div class="col-lg-12 offset-lg-2">
                        <ul class="list-style-none mb-0">
                            <li>
                                <h3 class="text-muted">Sistem Informasi Absensi Mahasiswa Manajemen Informatika</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8 offset-lg-3">
                        <ul class="list-style-none mb-0 ">
                            <li>
                                <h3 class="text-muted">PSDKU Politeknik Negeri Malang di Kota Kediri</h3>
                            </li>
                        </ul>     
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>

@endsection