@extends('layout.Admin')
@section('content')

                    <div class="card">
                   
                            <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <h5 class="card-title">Data Admin</h5>
                                </div>
                                <div class="col-1">
                                    <a href="/admin/tambah" class="btn btn-success float-right"><i class="fas fa-plus"> </i> </a>
                                </div>
                            </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                        <th>No.</th>
                                        <th>Level</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                        @foreach ($admin as $item)
                                        <tr>
                                            <td class="ellipsis">{{ $loop->iteration }}</td>
                                            <td class="ellipsis">{{ $item->level}}</td>
                                            <td class="ellipsis">{{ $item->name }}</td>
                                            <td class="ellipsis">{{ $item->username }}</td>
                                            <td class="ellipsis">{{ $item->email }}</td>
                                            <td> 
                                               <a href="/edit-admin/{{$item->id}}" class="btn btn-warning"><i class="fas fa-edit"> </i> </a>
                                               <a href="/hapus-admin/{{$item->id}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i class="fas fa-trash-alt"> </i> </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection