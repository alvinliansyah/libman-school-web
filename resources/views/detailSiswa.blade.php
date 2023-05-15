@extends('components/masterLayoutAdmin')
@section('content')
<h1 class="title">Siswa
			<div class="card float-end shadow" style="height: 3.5rem; width: 8.5rem; top: 10px;">
			<div class="card-header text-bg-primary" style="padding: 4px"></div>
			<div class="card-body">
			<center><p class="card-title" style="font-family: 'Open Sans', sans-serif; font-weight: 1000; font-size: 17px; line-height: 14px;">tingkatan<strong><a class="divider" style= "color:black; text-decoration: none; font-weight: 600; font-size: 18px; line-height: 10px;">&nbsp / &nbsp</a></strong>kelas</p></center>
			</div>
			</div>
			</h1>
			<ul class="breadcrumbs">
				<li><a href="dashboard">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Siswa</a>
			</li>
			</ul>
			<div class="card shadow">
			<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center><strong><button type="button" class="btn dropdown border-0 float-start" style="position: relative; top: -3px; left: -15px;"><a href="{{route('siswa')}}"style= "color:white; text-decoration: none; font-weight: normal;"><i class='bx bx-chevron-left icon bx-md'></i></a></strong></button>
			Data Siswa
					<strong><button type="button" class="btn btn-outline-light btn-sm float-end"><a href="#" data-bs-toggle="modal" data-bs-target="#modalTambahData" style= "font-size: 14.5px; color:white; text-decoration: none; font-weight: normal;"><i class='bx bx-add-to-queue icon'></i>&nbsp;Tambah Data</a></strong></button>
					</center></h4>
						<div class="card-body">
						<div class="container">
						<table id="example" class="table table-striped table-hover" style="width:100%">
							<thead>
								<tr>
									<th>NO</th>
									<th>NIS</th>
									<th>NAMA SISWA</th>
									<th>PASSWORD</th>
									<th>NO TELEPHONE</th>
									<th>JENIS KELAMIN</th>
									<th>AKSI</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<td>NO</td>
								<td>NIS</td>
								<td>NAMA SISWA</td>
								<td>PASSWORD</td>
								<td>NO TELEPHONE</td>
								<td>JENIS KELAMIN</td>
								<td>
								<div class="d-grid gap-2 d-md-flex justify-content-md">
											<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditData"><i class='bx bx-edit icon bx-xs'></i>&nbsp;Edit</button>
											<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusData"><i class='bx bx-trash icon bx-xs'></i>&nbsp;Hapus</button>
								</div>
										</td>
						<!-- Awal Modal Tambah Data -->
						<div class="modal fade" id="modalTambahData" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Siswa</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="tambahSiswa.php">
									<div class="modal-body">
										<div class="mb-3">
											<label class="form-label">NIS</label>
											<input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" class="form-control" name="number-nis1"
												placeholder="NIS" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Nama Siswa</label>
											<input type="text" class="form-control" name="text-namasiswa1"
												placeholder="Nama Siswa" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input type="password" class="form-control" name="password1"
												placeholder="Password" required>
										</div>
										<div class="mb-3">
											<label class="form-label">No Telepon</label>
											<input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" class="form-control" name="number-noteltepon1"
												placeholder="No Telepon" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Jenis Kelamin</label>
											<select class="form-select" name="text-jekel1">
												<option></option>
												<option value="L">L</option>
												<option value="P">P</option>
											</select>
										</div>
										<div class="mb-3">
											<input type="hidden" class="form-control" name="kelas1"
												value="">
										</div>
										<div class="mb-3">
											<input type="hidden" class="form-control" name="tingkatan1"
												value="">
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary"
											name="button-submittambahdata1">Simpan</button>
										<button type="button" class="btn btn-secondary"
											data-bs-dismiss="modal">Keluar</button>
									</div>
									</form>
								</div>
							</div>
						</div>
						<!-- Akhir Modal -->
						<!-- Awal Modal Edit Data -->
						<div class="modal fade" id="modalEditData" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Siswa</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="editSiswa.php">
									<div class="modal-body">
										<div class="mb-3">
											<label class="form-label">NIS</label>
											<input type="number" class="form-control" name="number-nis"
												value="" readonly>
										</div>
										<div class="mb-3">
											<label class="form-label">Nama Siswa</label>
											<input type="text" class="form-control" name="text-namasiswa"
												value="" placeholder="Nama Siswa" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input type="password" class="form-control" name="password"
											value="" placeholder="Password" required>
										</div>
										<div class="mb-3">
											<label class="form-label">No Telepon</label>
											<input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" class="form-control" name="number-noteltepon"
											value="" placeholder="No Telepon" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Jenis Kelamin</label>
											<select class="form-select" name="text-jekel">
												<option value=""></option>
												<option value="L">L</option>
												<option value="P">P</option>
											</select>
										</div>
										<div class="mb-3">
											<input type="hidden" class="form-control" name="kelas"
												value="">
										</div>
										<div class="mb-3">
											<input type="hidden" class="form-control" name="tingkatan"
												value="">
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary"
											name="button-editdata">Simpan</button>
										<button type="button" class="btn btn-secondary"
											data-bs-dismiss="modal">Keluar</button>
									</div>
									</form>
								</div>
							</div>
						</div>
						<!-- Akhir Modal -->
						<!-- Awal Modal Hapus Data -->
						<div class="modal fade" id="modalHapusData" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data?</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="hapusSiswa.php">
									<div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
									<div class="mb-3">
											<input type="hidden" class="form-control" name="NIS3"
											value="">
										</div>
									<div class="mb-3">
											<input type="hidden" class="form-control" name="kelas3"
												value="">
										</div>
									<div class="mb-3">
											<input type="hidden" class="form-control" name="tingkatan3"
												value="">
										</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-danger"
											name="button-submithapusdata">Hapus</button>
									</div>
									</form>
								</div>
							</div>
						</div>
						<!-- Akhir Modal -->
						</tr>
							</tbody>
						</table>
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