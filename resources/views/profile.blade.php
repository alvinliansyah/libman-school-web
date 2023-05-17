@extends('components/masterLayoutAdmin')
@section('content')
<h1 class="title">Profile</h1>
			<ul class="breadcrumbs">
				<li><a href="{{route('dashboard')}}">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Profile</a></li>
			</ul>
			<div class="card shadow">
					<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center>Profile
					<div class="dropdown float-end">
						<button class="btn btn-outline-light btn-sm float-end dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="left: 10px; color: white; top: -3px;">
						<i class='bx bx-cog bx-sm icon' ></i>
						</button>
						<ul class="dropdown-menu">
						<li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#modalEditAkun">Edit Akun</a></li>
						<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalHapusAkun">Hapus Akun</a></li>
						</ul>
					</div>
					</center></h4>
						<div class="card-body">
						<div class="profile-form">
						<form action="#">
						<center><div><img src="{!! asset('assets/img/default-avatar.png') !!}" alt="" class="img-profile"></div></center>
						<br/>
						<div>
						<label class="form-label">Kode Admin</label>
						<div class="field input-field">
							<input type="text" class="form-control" style="height: 50px;" name = "kdadmin" value="{{session()->get('id_admin')}}" readonly>
						</div>
						<label class="form-label">Nama Admin</label>
						<div class="field input-field">
							<input type="text" class="form-control" style="height: 50px;" name = "namaadmin" placeholder="Nama Admin" value="{{session()->get('nama_admin')}}" readonly>
						</div>
						<label class="form-label">Password</label>
						<div class="field input-field">
							<input type="password" class="form-control" style="height: 50px;" name = "pass" placeholder="Password" value="{{session()->get('password')}}" readonly>
						</div>
             		 </form>
						<!-- Awal Modal -->
						<div class="modal fade" id="modalEditAkun" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Akun</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="editAkun.php" enctype="multipart/form-data">
									<div class="modal-body">
										<div class="mb-3">
											<label class="form-label">Kode Admin</label>
											<input type="text" class="form-control" name="text-kodeadmin"
												value="" readonly>
										</div>
										<div class="mb-3">
											<label class="form-label">Nama Admin</label>
											<input type="text" class="form-control" name="text-namalengkapadmin"
												placeholder="Nama Admin" value="" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input type="password" class="form-control" name="password"
												placeholder="Password" value=""required>
										</div>
										<div class="mb-3">
											<label class="form-label">Foto Profile</label>
											<input id="file-fotoprofile" accept="image/*" type="file" class="form-control" name="file-fotoprofile" required>
										</div>

									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary" name="button-simpan">Simpan</button>
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
									</div>
									</form>
								</div>
							</div>
						</div>
						<!-- Akhir Modal -->
						<!-- Awal Modal Hapus Data -->
						<div class="modal fade" id="modalHapusAkun" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Akun?</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="hapusAkun.php">
									<div class="modal-body">Apakah anda yakin ingin menghapus Akun?</div>
									<div class="mb-3">
											<input type="hidden" class="form-control" name="text-kodeadmin"
												value="" required>
										</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-danger" name="button-submithapusdata">Hapus</button>
									</div>
									</form>
								</div>
							</div>
						</div>
						<!-- Akhir Modal -->
					</div>
				</div>
						</div>
						</div>
			</div>
			<br/>
			<footer>
			<center>
			<div class="text">
			<span>Dibuat Oleh <a href="#">Libman School</a> | &#169; 2022 Semua Hak Dilindungi Undang-Undang</span>
			</div>
			</center>
			</footer>
			<br/>
@endsection