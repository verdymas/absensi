@extends('layout.Mahasiswa')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container mx-5">
        <header class="major">
            <h3>ABSENSI MAHASISWA MANAJEMEN INFORMATIKA</h3>
        </header>
        <!-- Form -->
        <section>
            <input type="text" class="form-control" id="jam" name="jam" readonly
                value="{{ \Carbon\Carbon::now()->translatedFormat('d-m-Y H:i:s') }}">
            <br>
            <br>
            <h3>Isikan data dengan benar!</h3>
            </h3>
            <form method="post" action="#">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">
                        <input type="text" name="name" id="name" value="" placeholder="Name" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input type="email" name="email" id="email" value="" placeholder="Email" />
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="primary" /></li>
                            <li><input type="reset" value="Reset" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
    </div>

@endsection
