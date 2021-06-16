@extends('layout.Admin')
@section('content')               
                
                <div class="col-md-12">
                        <div class="card">
                        <form action="/update-dosen/{{$dosen->nidn}}" method="post">
                            @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Edit Dosen</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">NIDN</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nidn" class="form-control" autofocus required id="fname"
                                                placeholder="Masukkan NIDN" value="{{$dosen->nidn}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Nama Dosen</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="namadosen" class="form-control" 
                                            value="{{$dosen->nama_dosen}}" autofocus required id="lname"
                                                placeholder="Masukkan Nama Dosen"> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Mata Kuliah</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="matkul" class="form-control" autofocus required id="lname"
                                                placeholder="Masukkan Mata Kuliah" value="{{$dosen->matkul}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Tempat, Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ttl" class="form-control" autofocus required id="email1"
                                                placeholder="Masukkan Tempat, Tanggal Lahir" value="{{$dosen->ttl}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="jenkel" class="form-control" autofocus required id="cono1"
                                                placeholder="Masukkan Jenis Kelamin" value="{{$dosen->jenis_kelamin}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea name="alamat" class="form-control" autofocus required placeholder="Masukkan Alamat Lengkap">{{$dosen->alamat_lengkap}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                        <select name="agama" class="form-control" id="exampleFormControlSelect1" placeholder="" autocomplete="off" >
                                        <option value="">--Pilih Agama--</option>
                                        <option value="Islam" @if($dosen->agama == "Islam") selected @endif >Islam</option>
                                        <option value="Kristen" @if($dosen->agama == "Kristen") selected @endif >Kristen</option>
                                        <option value="Budda" @if($dosen->agama == "Budda") selected @endif >Budda</option>
                                        <option value="Hindu" @if($dosen->agama == "Hindu") selected @endif >Hindu</option>
                                        <option value="Katolik" @if($dosen->agama == "Katolik") selected @endif >Katolik</option>
                                        <option value="Konghucu" @if($dosen->agama == "Konghucu") selected @endif >Konghucu</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <a href="/dosen" class="btn btn-dark"><i class="fas fa-arrow-alt-circle-left"></i> KEMBALI</a>
                                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> SIMPAN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
</div>
@endsection