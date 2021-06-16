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
                                    <h5 class="card-title">Rekap Absensi</h5>
                                </div>
                                <div class="col-4">
                                    <a href="/download-pdf" class="btn btn-success float-right"><i class="fas fa-file-pdf"></i> PDF</a>
                                    <a href="/export-excel" class="btn btn-success float-right"><i class="fas fa-file-excel"></i> Excel</a>
                                    <a href="export-csv" class="btn btn-success float-right"><i class="fas fa-print"></i> CSV</a>
                                </div>
                            </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Prodi</th>
                                            <th>Tanggal</th>
                                            <th>Matkul</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    </tbody>
                                        @foreach ($absensi as $item)
                                        <tr>
                                            <td>{{ $item->no }}</td>
                                            <td>{{ $item->nim }}</td>
                                            <td>{{ $item->nama_lengkap }}</td>
                                            <td>{{ $item->prodi }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->matkul }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection