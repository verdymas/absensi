@extends('layout.Admin')
@section('content')               
                
                <div class="col-md-12">
                        <div class="card">
                        <form action="/add_jadwal" method="post">
                            @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Jadwal</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">ID Jadwal</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="jd" id="nidn" class="form-control" autofocus required id="fname"
                                                placeholder="Masukkan ID Jadwal" maxlength=10>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">ID Semester</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="smt" class="form-control" autofocus required id="lname"
                                                placeholder="Masukkan ID Semester">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">ID Kelas</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kls" class="form-control" autofocus required id="lname"
                                                placeholder="Masukkan ID Kelas">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Kode Mata Kuliah</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kodemk" class="form-control" autofocus required id="email1"
                                                placeholder="Masukkan Kode Mata Kuliah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Hari</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="hari" class="form-control" autofocus required id="cono1"
                                                placeholder="Masukkan Hari">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Jam Mulai</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="jm" class="form-control" autofocus required id="cono1"
                                                placeholder="Masukkan Hari">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Jam Selesai</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="js" class="form-control" autofocus required id="cono1"
                                                placeholder="Masukkan Hari">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                    <a href="/jadwal" class="btn btn-dark"><i class="fas fa-arrow-alt-circle-left"></i> KEMBALI</a>
                                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> SIMPAN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
</div>
@endsection