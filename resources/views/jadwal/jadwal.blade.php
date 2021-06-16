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
                                    <h5 class="card-title">Data Jadwal</h5>
                                </div>
                                <div class="col-1">
                                    <a href="/jadwal/tambah" class="btn btn-success float-right"><i class="fas fa-plus"> </i> </a>
                                </div>
                            </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>ID Jadwal</th>
                                            <th>ID Semester</th>
                                            <th>ID Kelas</th>
                                            <th>Kode Matkul</th>
                                            <th>Hari</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Selesai</th>
                                            <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($jadwal as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->id_jadwal }}</td>
                                            <td>{{ $item->id_semester }}</td>
                                            <td>{{ $item->id_kelas }}</td>
                                            <td>{{ $item->kode_matkul }}</td>
                                            <td>{{ $item->hari }}</td>
                                            <td>{{ $item->jam_mulai }}</td>
                                            <td>{{ $item->jam_selesai }}</td>
                                            <td> 
                                               <a href="" class="btn btn-warning"><i class="fas fa-edit"> </i> </a>
                                               <a href="" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i class="fas fa-trash-alt"> </i> </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection