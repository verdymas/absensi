
                    <div class="card">
                   
                            <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <h5 class="card-title">Rekap Absensi</h5>
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

