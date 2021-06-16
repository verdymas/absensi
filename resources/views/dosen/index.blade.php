@extends('layout.Admin')
@section('content')
@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                    <div class="card">
                   
                            <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <h5 class="card-title">Data Dosen</h5>
                                </div>
                                <div class="col-1">
                                    <a href="/dosen/form-tambah" class="btn btn-success float-right"><i class="fas fa-plus"> </i> </a>
                                </div>
                            </div>
                            <!-- <h5 class="card-title">Data Dosen</h5><a href="/dosen/form-tambah" class="btn btn-success"><i class="fas fa-plus"> </i> </a> -->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>NIDN</th>
                                            <th>Nama Dosen</th>
                                            <th>Mata Kuliah</th>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Agama</th>
                                            <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($dosen as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nidn }}</td>
                                            <td>{{ $item->nama_dosen }}</td>
                                            <td>{{ $item->matkul }}</td>
                                            <td>{{ $item->ttl }}</td>
                                            <td>{{ $item->jenis_kelamin }}</td>
                                            <td>{{ $item->alamat_lengkap }}</td>
                                            <td>{{ $item->agama }}</td>
                                            <td> 
                                               <a href="/edit-dosen/{{$item->nidn}}" class="btn btn-warning"><i class="fas fa-edit"> </i> </a>
                                               <a href="/hapus-dosen/{{$item->nidn}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i class="fas fa-trash-alt"> </i> </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection