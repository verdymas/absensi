@extends('layout.Admin')
@section('content')               
                
                <div class="col-md-12">
                        <div class="card">
                        <form action="/add_matkul" method="post">
                            @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Mata Kuliah</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Kode Mata Kuliah</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kodemk" class="form-control" autofocus required id="fname"
                                                placeholder="Masukkan Kode Mata Kuliah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Nama Mata Kuliah</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="namamk" class="form-control" autofocus required id="lname"
                                                placeholder="Masukkan Nama Mata Kuliah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">SKS</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="sks" class="form-control" autofocus required id="lname"
                                                placeholder="Masukkan SKS">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                    <a href="/matkul" class="btn btn-dark"><i class="fas fa-arrow-alt-circle-left"></i> KEMBALI</a>
                                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> SIMPAN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
</div>
@endsection