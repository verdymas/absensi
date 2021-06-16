@extends('layout.Mahasiswa')
@section('content')
@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="container mx-5">
                        <header class="major">
							<h3>DATA MATA KULIAH MAHASISWA MANAJEMEN INFORMATIKA</h3>
						</header>
								<div class="table-wrapper row4">
									<table class="alt">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Mata Kuliah</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>SKS</th>
                                        </tr>
                                    </thead>
                                    </tbody>
                                    @foreach ($matkul as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode_matkul }}</td>
                                        <td>{{ $item->nama_matkul }}</td>
                                        <td>{{ $item->sks }}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
									</table>
								</div>
                        </div>
@endsection
