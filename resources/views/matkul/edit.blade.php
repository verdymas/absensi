@extends('layout.Admin')
@section('content')               
                
                <div class="col-md-12">
                        <div class="card">
                        <form action="/update-matkul/{{$matkul->kode_matkul}}" method="post">
                            @csrf

        <!-- Begin Page Content -->
          <div class="container-fluid">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Mata Kuliah</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Kode Mata Kuliah</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kodemk" class="form-control" autofocus required id="fname"
                                                placeholder="Masukkan Kode Mata Kuliah" value="{{$matkul->kode_matkul}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Nama Mata Kuliah</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="namamk" class="form-control" 
                                            value="{{$matkul->nama_matkul}}" autofocus required id="lname"
                                                placeholder="Masukkan Nama Mata Kuliah"> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">SKS</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="sks" class="form-control" autofocus required id="lname"
                                                placeholder="Masukkan SKS" value="{{$matkul->sks}}">
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
</div>
@endsection