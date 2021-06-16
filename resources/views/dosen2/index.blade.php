@extends('layout.Mahasiswa')
@section('content')
@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                    <div class="container mx-5">
                        <header class="major">
							<h3>DATA DOSEN MAHASISWA MANAJEMEN INFORMATIKA</h3>
						</header>
								<div class="table-wrapper row4">
									<table class="alt">
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
                                        </tr>
                                        @endforeach
                                        </tbody>
									</table>
								</div>
                        </div>
@endsection
