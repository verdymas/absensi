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
                                    <h5 class="card-title">Data Mahasiswa</h5>
                                </div>
                                <div class="col-1">
                                    <a href="/mahasiswa/tambah" class="btn btn-success float-right"><i class="fas fa-plus"> </i> </a>
                                </div>
                            </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                        <th>No.</th>
                                        <th>NIM</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Prodi</th>
                                        <th>Semester</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    </tbody>
                                        @foreach ($mahasiswa as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nim }}</td>
                                            <td>{{ $item->nama_mhs }}</td>
                                            <td>{{ $item->prodi }}</td>
                                            <td>{{ $item->semester }}</td>
                                            <td> 
                                                <a href="/detail-mahasiswa/{{$item->id}}" class="btn btn-info"><i class="fas fa-eye"> </i> </a>
                                               <a href="/edit-mhs/{{$item->id}}" class="btn btn-warning"><i class="fas fa-edit"> </i> </a>
                                               <a href="/hapus-mhs/{{$item->id}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i class="fas fa-trash-alt"> </i> </a>
                                               </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection