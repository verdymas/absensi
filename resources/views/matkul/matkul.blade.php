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
                                    <h5 class="card-title">Data Mata Kuliah</h5>
                                </div>
                                <div class="col-1">
                                    <a href="/matkul/tambah" class="btn btn-success float-right"><i class="fas fa-plus"> </i> </a>
                                </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Mata Kuliah</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>SKS</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    </tbody>
                                    @foreach ($matkul as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode_matkul }}</td>
                                        <td>{{ $item->nama_matkul }}</td>
                                        <td>{{ $item->sks }}</td>
                                        <td>
                                               <a href="/edit-matkul/{{$item->kode_matkul}}" class="btn btn-warning"><i class="fas fa-edit"> </i> </a>
                                               <a href="/hapus-matkul/{{$item->kode_matkul}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i class="fas fa-trash-alt"> </i> </a>
                                        </td>
                                       </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection