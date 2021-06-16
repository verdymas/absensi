@extends('layout.Mahasiswa')
@section('content')
@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                    <div class="container mx-5">
                        <header class="major">
							<h3>JADWAL KELAS MAHASISWA MANAJEMEN INFORMATIKA</h3>
						</header>
								<div class="table-wrapper row4">
									<table class="alt">
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
                                        </tr>
                                        @endforeach
                                        </tbody>
									</table>
								</div>
                        </div>
@endsection
