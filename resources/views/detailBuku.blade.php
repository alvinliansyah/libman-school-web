@extends('components/masterLayoutAdmin')
@section('content')
<h1 class="title">Buku
			<div class="card float-end shadow" style="height: 3.5rem; width: auto; top: 10px;">
			<div class="card-header text-bg-primary" style="padding: 4px"></div>
			<div class="card-body">
				<center><p class="card-title" style="font-family: 'Open Sans', sans-serif; font-weight: 1000; font-size: 17px; line-height: 14px;">jenis</p></center>
			</div>
			</div>
			</h1>
			<ul class="breadcrumbs">
				<li><a href="dashboard.php">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Buku</a></li>
			</ul>
			<div class="card shadow">
			<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center><strong><button type="button" class="btn dropdown border-0 float-start" style="position: relative; top: -3px; left: -15px;"><a href="{{route('buku')}}"style= "color:white; text-decoration: none; font-weight: normal;"><i class='bx bx-chevron-left icon bx-md'></i></a></strong></button>
			Data Buku
					<strong><button type="button" class="btn btn-outline-light btn-sm float-end"><a href="#" data-bs-toggle="modal" data-bs-target="#modalTambahData" style= "font-size: 14.5px; color:white; text-decoration: none; font-weight: normal;"><i class='bx bx-add-to-queue icon'></i>&nbsp;Tambah Data</a></strong></button>
					</center></h4>
						<div class="card-body">
						<div class="container">
						<table id="example" class="table table-striped table-hover" style="width:100%">
							<thead>
								<tr>
									<th>NO</th>
									<th>KODE BUKU</th>
									<th>JUDUL</th>
									<th>SEMESTER</th>
									<th>TINGKATAN</th>
									<th>JUMLAH</th>
									<th>AKSI</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>NO</td>
									<td>KODE BUKU</td>
									<td>JUDUL</td>
									<td>SEMESTER</td>
									<td>TINGKATAN</td>
									<td>JUMLAH</td>
									<td>
									<div class="d-grid gap-2 d-md-flex justify-content-md">
											<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditData"><i class='bx bx-edit icon bx-xs'>&nbsp;Edit</i></button>
											<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusData"><i class='bx bx-trash icon bx-xs'></i>&nbsp;Hapus</button>
								</div>
										</td>
						<!-- Awal Modal Tambah Data -->
						<div class="modal fade" id="modalTambahData" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Buku</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="tambahBuku.php" enctype="multipart/form-data">
									<div class="modal-body">
										<div class="mb-3">
											<label class="form-label">Kode Buku</label>
											<input type="text" class="form-control" name="text-kodebuku"
												placeholder="Kode Buku" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Judul</label>
											<input type="text" class="form-control" name="text-judul"
												placeholder="Judul" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Semester</label>
											<select class="form-select" name="text-semester">
												<option></option>
												<option value="1">1</option>
												<option value="2">2</option>
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Tingkatan</label>
											<select class="form-select" name="text-Tingkatan">
												<option></option>
												<option value="VII">VII</option>
												<option value="VIII">VIII</option>
												<option value="IX">IX</option>
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Jumlah</label>
											<input type="number" class="form-control" name="text-jumlah"
												value=1 readonly>
										</div>
										<div class="mb-3">
											<input type="hidden" class="form-control" name="text-jenis"
												value="" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Foto Buku</label>
											<input id="file-fotobuku" accept="image/*" type="file" class="form-control" name="file-fotobuku" required>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary"
											name="button-submittambahdata">Simpan</button>
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
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Buku</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="editBuku.php">
									<div class="modal-body">
										<div class="mb-3">
											<label class="form-label">Kode Buku</label>
											<input type="text" class="form-control" name="text-kodebuku"
												value="" readonly>
										</div>
										<div class="mb-3">
											<label class="form-label">Judul</label>
											<input type="text" class="form-control" name="text-judul"
												value="" placeholder="Judul" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Semester</label>
											<select class="form-select" name="text-semester">
												<option value=""  selected="selected"></option>
												<option value="1" selected="selected">1</option>
												<option value="2"  selected="selected">2</option>
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Tingkatan</label>
											<select class="form-select" name="text-Tingkatan">
												<option value="VII" selected="selected">VII</option>
												<option value="VIII"  selected="selected">VIII</option>
												<option value="IX"  selected="selected">IX</option>
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Jumlah</label>
											<input type="number" class="form-control" name="text-jumlah"
												value=1 readonly>
										</div>
										<div class="mb-3">
											<input type="hidden" class="form-control" name="text-jenis"
												value="" required>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary"
											name="button-submiteditdata">Simpan</button>
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
									<form method="POST" action="hapusBuku.php">
									<div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
									<div class="mb-3">
											<input type="hidden" class="form-control" name="text-kodebuku"
												value="" required>
										</div>
									<div class="mb-3">
											<input type="hidden" class="form-control" name="text-jenis"
												value="" required>
										</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-danger"
											name="button-hapusdata">Hapus</button>
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