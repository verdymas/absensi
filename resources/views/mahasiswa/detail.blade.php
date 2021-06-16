@extends('layout.Admin')
@section('content')

<div class="col-md-12">
  <div class="card">
                        <form action="/detail-mahasiswa/{mahasiswa:id}" method="post">
                            @csrf
                                <div class="card-body"> 

                        <!-- Begin Page Content -->
          <div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-3">
    <div class="card-body">
      <!-- Page Heading -->
      <h1 class="h3 text-success"><i class="fas fa-fw fa-info-circle"></i> Detail Data Mahasiswa</h1>
    </div>
</div>

<!-- DataTables Example -->
<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
        <label class="text-success font-weight-bold"><i class="fas fa-fw fa-question-circle"></i> Data Pribadi</label>
        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
          <tr>
              <td style="width: 20%"><i class="fas fa-fw fa-star"></i>NIM</td>
              <td style="width: 80%">{{$mahasiswa->nim}}</td>
          </tr>
          <tr>
              <td style="width: 20%"><i class="fas fa-fw fa-id-card"></i> Nama Mahasiswa</td>
              <td style="width: 80%">{{$mahasiswa->nama_mhs}}</td>
          </tr>
          <tr>
              <td style="width: 20%"><i class="fas fa-fw fa-venus-mars"></i> Prodi</td>
              <td style="width: 80%">{{$mahasiswa->prodi}}</td>
          </tr>
          <tr>
              <td style="width: 20%"><i class="fas fa-fw fa-home"></i> Semester</td>
              <td style="width: 80%">{{$mahasiswa->semester}}</td>
          </tr>
          <tr>
              <td style="width: 20%"><i class="fas fa-fw fa-home"></i> TTL</td>
              <td style="width: 80%">{{$mahasiswa->ttl}}</td>
          </tr>
          <tr>
              <td style="width: 20%"><i class="fas fa-fw fa-home"></i> Jenis Kelamin</td>
              <td style="width: 80%">{{$mahasiswa->jenis_kelamin}}</td>
          </tr>
          <tr>
              <td style="width: 20%"><i class="fas fa-fw fa-chalkboard"></i> Alamat</td>
              <td style="width: 80%">{{$mahasiswa->alamat_lengkap}}</td>
          </tr>
          <tr>
              <td style="width: 20%"><i class="fas fa-fw fa-calendar-check"></i> Agama</td>
              <td style="width: 80%">{{$mahasiswa->agama}}</td>
          </tr>
        </table>
        <br>
      </div>
        <a href="/mahasiswa" class="btn btn-dark"><i class="fas fa-arrow-alt-circle-left"></i> KEMBALI</a>
    </div>
  </div>
</div>

</div>

@endsection