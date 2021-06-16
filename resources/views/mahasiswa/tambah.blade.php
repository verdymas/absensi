@extends('layout.Admin')
@section('content')               
                
                <div class="col-md-12">
                        <div class="card">
                        <form action="/add_mahasiswa" method="post">
                            @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Mahasiswa</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">NIM</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nim" class="form-control" autofocus required id="fname"
                                                placeholder="Masukkan NIM">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Nama Mahasiswa</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="namamhs" class="form-control" autofocus required id="lname"
                                                placeholder="Masukkan Nama Mahasiswa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control" autofocus required id="lname"
                                                placeholder="Masukkan Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Prodi</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="prodi" class="form-control" autofocus required id="lname"
                                                placeholder="Masukkan Prodi">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Semester</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="semester" class="form-control" autofocus required id="lname"
                                                placeholder="Masukkan Semester">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Tempat, Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ttl" class="form-control" autofocus required id="email1"
                                                placeholder="Masukkan Tempat, Tanggal Lahir">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="jenkel" class="form-control" autofocus required id="cono1"
                                                placeholder="Masukkan Jenis Kelamin">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea name="alamat" class="form-control" autofocus required placeholder="Masukkan Alamat Lengkap"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <textarea name="agama" class="form-control" autofocus required placeholder="Masukkan Agama"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <a href="/mahasiswa" class="btn btn-dark"><i class="fas fa-arrow-alt-circle-left"></i> KEMBALI</a>
                                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> SIMPAN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
</div>
@endsection