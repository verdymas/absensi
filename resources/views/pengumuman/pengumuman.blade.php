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
                                    <h5 class="card-title">Data Pengumuman</h5>
                                </div>
                                <div class="col-1">
                                    <a href="/pengumuman/tambah" class="btn btn-success float-right"><i class="fas fa-plus"> </i> </a>
                                </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%;">No.</th>
                                            <th style="width: 25%;">Judul</th>
                                            <th style="width: 50%;">Pengumuman</th>
                                            <th style="width: 20%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    </tbody>
                                        @foreach ($pengumuman as $item)
                                        <tr>
                                            <td class="ellipsis">{{ $loop->iteration }}</td>
                                            <td class="ellipsis">{{ $item->judul }}</td>
                                            <td class="ellipsis">{{ $item->pengumuman }}</td>
                                            <td> 
                                               <a href="/edit-peng/{{$item->id}}" class="btn btn-warning"><i class="fas fa-edit"> </i> </a>
                                               <a href="/hapus-peng/{{$item->id}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i class="fas fa-trash-alt"> </i> </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection