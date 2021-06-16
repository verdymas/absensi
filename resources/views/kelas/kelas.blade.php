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
                    <h5 class="card-title">Data Kelas</h5>
                </div>
                <div class="col-1">
                    <a href="/matkul/tambah" class="btn btn-success float-right"><i class="fas fa-plus"> </i> </a>
                </div>
            </div>
            <div class="col-2">
                <select name="semester" id="semester" class="form-control">
                    <option value="">-- Pilih Semester --</option>
                    @foreach ($semester as $semester)
                        <option value="{{ $semester->id_semester }}">{{ $semester->semester }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="table-responsive">
                <table id="tabel_all" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    </tbody>
                    @foreach ($kelas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_kelas }}</td>
                            <td>
                                <a href="" class="btn btn-warning"><i class="fas fa-edit"> </i> </a>
                                <a href="" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i
                                        class="fas fa-trash"> </i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <table id="tabel_ganjil" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    </tbody>
                    @foreach ($ganjil as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_kelas }}</td>
                            <td>
                                <a href="" class="btn btn-warning"><i class="fas fa-edit"> </i> </a>
                                <a href="" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i
                                        class="fas fa-trash"> </i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <table id="tabel_genap" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    </tbody>
                    @foreach ($genap as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_kelas }}</td>
                            <td>
                                <a href="" class="btn btn-warning"><i class="fas fa-edit"> </i> </a>
                                <a href="" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i
                                        class="fas fa-trash"> </i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
