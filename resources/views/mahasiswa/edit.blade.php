@extends('layout.Admin')
@section('content')               
                
                <div class="col-md-12">
                        <div class="card">
                        <form action="/update-mhs/{{$mahasiswa->id}}" method="post">
                            @csrf
        
        <!-- Begin Page Content -->
          <div class="container-fluid">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Data Mahasiswa</h4>
                                    <input type="hidden" name="id" class="form-control" value="{{$mahasiswa->id}}">
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">NIM</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nim" class="form-control" autofocus required id="nim" maxlength="10"
                                                placeholder="Masukkan NIM" value="{{$mahasiswa->nim}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Nama Mahasiswa</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="namamhs" class="form-control" 
                                            value="{{$mahasiswa->nama_mhs}}" autofocus required id="lname"
                                                placeholder="Masukkan Nama Mahasiswa"> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Prodi</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="prodi" class="form-control" autofocus required id="lname"
                                                placeholder="Masukkan Prodi" value="{{$mahasiswa->prodi}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Semester</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="semester" class="form-control" autofocus required id="semester" maxlength="1"
                                                placeholder="Masukkan Semester" value="{{$mahasiswa->semester}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Tempat, Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ttl" class="form-control" autofocus required id="email1"
                                                placeholder="Masukkan Tempat, Tanggal Lahir" value="{{$mahasiswa->ttl}}">
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="exampleFormControlSelect1"
                                            class="col-sm-3 text-end control-label col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1" placeholder="" autocomplete="off" >
                                        <option value="Laki-Laki" @if($mahasiswa->jenis_kelamin == "Laki-Laki") selected @endif >Laki-Laki</option>
                                        <option value="Perempuan"  @if($mahasiswa->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea name="alamat" class="form-control" autofocus required placeholder="Masukkan Alamat Lengkap">{{$mahasiswa->alamat_lengkap}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <input name="agama" class="form-control" value="{{$mahasiswa->agama}}" autofocus required placeholder="Masukkan Agama">
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

<script>
    function setInputFilter(textbox, inputFilter) {
        ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
            textbox.addEventListener(event, function() {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
            });
        });
    }

    setInputFilter(document.getElementById("nim"), function(value) {
        return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
    });
    setInputFilter(document.getElementById("semester"), function(value) {
        return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
    });
</script>

@endsection