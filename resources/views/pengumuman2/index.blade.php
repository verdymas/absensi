@extends('layout.Mahasiswa')
@section('content')
@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="container mx-5">
                            <header class="major">
                                <h3>DATA PENGUMUMAN MANAJEMEN INFORMATIKA</h3>
                            </header>
								<div class="table-wrapper row4">
									<table class="alt">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%;">No.</th>
                                            <th style="width: 25%;">Judul</th>
                                            <th style="width: 50%;">Pengumuman</th>
                                        </tr>
                                    </thead>
                                    </tbody>
                                        @foreach ($pengumuman as $item)
                                        <tr>
                                            <td class="ellipsis">{{ $loop->iteration }}</td>
                                            <td class="ellipsis">{{ $item->judul }}</td>
                                            <td class="ellipsis">{{ $item->pengumuman }}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
									</table>
								</div>
                            </div>
                        <div class="container mx-5">
                        <div class="d-flex p-2 bd-highlight">I'm a flexbox container!
                            <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                            </nav>
                        </div>
                        </div>
@endsection