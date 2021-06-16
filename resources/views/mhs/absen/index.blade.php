@extends('layout.Mahasiswa')
@section('content')
    @if ($msg = session()->get('status'))
        <script>
            alert("{{ $msg }}")
        </script>
    @endif
    <div class="container mx-5">
        <header class="major">
            <h3>ABSENSI MAHASISWA MANAJEMEN INFORMATIKA</h3>
        </header>
        <!-- Form -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" colspan="2">MAHASISWA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NIM</td>
                    <td>{{ $mhs->nim }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>{{ $mhs->nama_mhs }}</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>{{ $mhs->prodi }}</td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" colspan="2">KELAS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Kelas</td>
                    <td>{{ $mhs->nama_kelas }}</td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>{{ $mhs->semester }} ({{ $mhs->smt }})</td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" colspan="2">JADWAL</th>
                </tr>
            </thead>
            <tbody>
                @if ($absen)
                    <form action="{{ route('hadir') }}" method="post">
                        @csrf
                        <tr>
                            <td>Kode Matkul</td>
                            <td>{{ $absen->kode_matkul }}</td>
                        </tr>
                        <tr>
                            <td>Mata Kuliah</td>
                            <td>{{ $absen->nama_matkul }}</td>
                        </tr>
                        <tr>
                            <td>SKS</td>
                            <td>{{ $absen->sks }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" value="{{ $absen->id_jadwal }}" name="id_jadwal">
                                <input type="hidden" value="{{ $mhs->nim }}" name="nim">
                                <input type="hidden" value="{{ $mhs->nama_mhs }}" name="nama_mhs">
                                <input type="hidden" value="{{ $mhs->prodi }}" name="prodi">
                                <input type="hidden" value="{{ $absen->nama_matkul }}" name="matkul">
                                <input type="submit" value="Hadir">
                            </td>
                        </tr>
                    </form>
                @else
                    <tr>
                        <td colspan="2" style="text-align: center">Tidak ada Jadwal</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
