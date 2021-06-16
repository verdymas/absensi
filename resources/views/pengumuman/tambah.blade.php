@extends('layout.Admin')
@section('content')               
                
                <div class="col-md-12">
                        <div class="card">
                        <form action="/add_peng" method="post">
                            @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Pengumuman</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">ID</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="id" class="form-control" autofocus required id="fname"
                                                placeholder="Masukkan Judul">
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Judul</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="judul" class="form-control" autofocus required id="fname"
                                                placeholder="Masukkan Judul">
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Pengumuman</label>
                                        <div class="col-sm-9">
                                            <textarea name="pengumuman" class="form-control" autofocus required placeholder="Masukkan Pengumuman"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                    <a href="/pengumuman" class="btn btn-dark"><i class="fas fa-arrow-alt-circle-left"></i> KEMBALI</a>
                                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> SIMPAN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
</div>
@endsection