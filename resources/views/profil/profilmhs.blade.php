@extends('layout.Mahasiswa')
@section('content')
                        <div class="container mx-5">
                        <header class="major">
							<h3>PROFIL MAHASISWA MANAJEMEN INFORMATIKA</h3>
                        </header>
                        <div class="row gtr-150">
							<div class="col-4 col-12-medium">
								<!-- Sidebar -->
									<section id="sidebar">
										<section>
                                            <h3>Profil Mahasiswa</h3>
                                            <hr/>
											<a href="#" class="image fit"><img src="/dua/images/pic06.jpg" alt="" /></a>
											
											<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
											<footer>
												<ul class="actions">
													<li><a href="#" class="button">Learn More</a></li>
												</ul>
											</footer>
										</section>
									</section>

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<section id="content">
										<a href="#" class="image fit"><img src="/dua/images/pic05.jpg" alt="" /></a>
										<h3>Profil {{auth()->user()->username}} !</h3>
										<p>Aliquam massa urna, imperdiet sit amet mi non, bibendum euismod est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam quam, mollis at magna consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam.</p>
										<p>Vestibulum diam quam, mollis at consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum. Morbi mattis elementum orci, nec dictum porta cursus justo. Quisque ultricies lorem in ligula condimentum, et egestas turpis sagittis. Cras ac nunc urna. Nullam eget lobortis purus. Phasellus vitae tortor non est placerat tristique.</p>
										<h3>Sed Magna Ornare</h3>
										<p>In vestibulum massa quis arcu lobortis tempus. Nam pretium arcu in odio vulputate luctus. Suspendisse euismod lorem eget lacinia fringilla. Sed sed felis justo. Nunc sodales elit in laoreet aliquam. Nam gravida, nisl sit amet iaculis porttitor, risus nisi rutrum metus.</p>
										<ul>
											<li>Faucibus orci lobortis ac adipiscing integer.</li>
											<li>Col accumsan arcu mi aliquet placerat.</li>
											<li>Lobortis vestibulum ut magna tempor massa nascetur.</li>
											<li>Blandit massa non blandit tempor interdum.</li>
											<li>Lacinia mattis arcu nascetur lobortis.</li>
										</ul>
									</section>

							</div>

                            
                            <div class="col-md-12">
                            <div class="card">
                                                    <form action="/detail-mahasiswa/{mahasiswa:id}" method="post">
                                                        @csrf
                                                            <div class="card-body"> 

                                                    <!-- Begin Page Content -->
                                    <div class="container-fluid">

                            <!-- Page Heading -->
                            <div class="card shadow mb-3">
                                <div class="card-body">
                                <!-- Page Heading -->
                                <h1 class="h3 text-primary"><i class="fas fa-fw fa-info-circle"></i> Detail Data Mahasiswa</h1>
                                <p class="mb-0 text-gray-800"> <b></b>
                                    <span class="badge badge-" style="height:20px; width:30px;">
                                    
                                    </span>
                                </p>
                                </div>
                            </div>

                            <!-- DataTables Example -->
                            <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <label class="text-primary font-weight-bold"><i class="fas fa-fw fa-question-circle"></i> Data Pribadi</label>
                                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <tr>
                                        <td style="width: 20%"><i class="fas fa-fw fa-star"></i>NIM</td>
                                        <td style="width: 80%">{{$mahasiswa->nim}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%"><i class="fas fa-fw fa-id-card"></i> Nama Mahasiswa</td>
                                        <td style="width: 80%">{{$mahasiswa->nama_mhs}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%"><i class="fas fa-fw fa-venus-mars"></i> Prodi</td>
                                        <td style="width: 80%">{{$mahasiswa->prodi}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%"><i class="fas fa-fw fa-home"></i> Semester</td>
                                        <td style="width: 80%">{{$mahasiswa->semester}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%"><i class="fas fa-fw fa-home"></i> TTL</td>
                                        <td style="width: 80%">{{$mahasiswa->ttl}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%"><i class="fas fa-fw fa-home"></i> Jenis Kelamin</td>
                                        <td style="width: 80%">{{$mahasiswa->jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%"><i class="fas fa-fw fa-chalkboard"></i> Alamat</td>
                                        <td style="width: 80%">{{$mahasiswa->alamat_lengkap}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%"><i class="fas fa-fw fa-calendar-check"></i> Agama</td>
                                        <td style="width: 80%">{{$mahasiswa->agama}}</td>
                                    </tr>
                                    </table>
                                    <br>
                                </div>
                                    <a href="/profil_mahasiswa" class="btn btn-danger btn-flat"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                            </div>

                            </div>
						</div>
                    </div>						
@endsection
