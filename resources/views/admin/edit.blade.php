@extends('layout.Admin')
@section('content')               
                
                <div class="col-md-12">
                        <div class="card">
                        <form action="/update-admin/{{$admin->id}}" method="post">
                            @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Edit Admin</h4>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Nama Admin</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nm" class="form-control" 
                                            value="{{$admin->name}}" autofocus required id="lname"
                                                placeholder="Masukkan Nama Mata Kuliah"> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="username" class="form-control" autofocus required id=""
                                                placeholder="Masukkan SKS" value="{{$admin->username}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control" autofocus required id=""
                                                placeholder="Masukkan Email" value="{{$admin->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                        <input name="password" type="password" class="form-control" autofocus required id=""
                                                value="{{$admin->password}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <a href="/halaman_admin" class="btn btn-dark"><i class="fas fa-arrow-alt-circle-left"></i> KEMBALI</a>
                                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> SIMPAN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
</div>
@endsection