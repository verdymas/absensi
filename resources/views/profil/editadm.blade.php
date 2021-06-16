@extends('layout.Admin')
@section('content')               
                <div class="tab-pane" id="password" >
                    <form class="form-horizontal" action="/update-profil-admin" method="POST">
                      @csrf
                       <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="Username" name="username" class="form-control" id="inputName" placeholder="Username" readonly="" value="{{Auth::user()->username}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Password Baru</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" id="inputEmail" placeholder="Password Baru" value="" required="">
                        </div>
                      </div>
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
@endsection