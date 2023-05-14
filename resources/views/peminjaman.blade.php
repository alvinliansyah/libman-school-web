@extends('components/masterLayoutAdmin')
@section('content')
			<h1 class="title">Peminjaman</h1>
			<ul class="breadcrumbs">
				<li><a href="{{route('dashboard')}}">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Peminjaman</a></li>
			</ul>
		<div class="card shadow">
					<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center>Transaksi Peminjaman
					<strong><button type="button" class="btn btn-outline-light btn-sm float-end"><a href="#" data-bs-toggle="modal" data-bs-target="#modalTambahTransaksi" style= "font-size: 14.5px; color:white; text-decoration: none; font-weight: normal;"><i class='bx bx-add-to-queue icon'></i>&nbsp;Tambah Transaksi</a></strong></button>
					</center></h4>
						<div class="card-body">
						<div class="container">
						<table id="example" class="table table-striped table-hover" style="width:100%">
							<thead>
								<tr>
									<th>NO</th>
									<th>KODE PEMINJAMAN</th>
									<th>NIS</th>
									<th>KODE BUKU</th>
									<th>JUMLAH</th>
									<th>TGL PEMINJAMAN</th>
									<th>TGL PENGEMBALIAN</th>
									<th>ID ADMIN</th>
									<th>AKSI</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>NO</td>
									<td>KODE PEMINJAMAN</td>
									<td>NIS</td>
									<td>KODE BUKU</td>
									<td>JUMLAH</td>
									<td>TGL PEMINJAMAN</td>
									<td>TGL PENGEMBALIAN</td>
									<td>ID ADMIN</td>
									<td>
									<div class="d-grid gap-2 d-md-flex justify-content-md">
									<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditData"><i class='bx bx-edit icon bx-xs'>&nbsp;Edit</i></button>
									</div>
									</td>
						<!-- Awal Modal -->
					<div class="modal fade" id="modalTambahTransaksi" data-bs-backdrop="static" data-bs-keyboard="false"
					tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header  text-bg-primary">
								<h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Transaksi Peminjaman</h1>
								<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<form method="POST" action="tambahPinjam.php">
							<div class="modal-body">
								<div class="mb-3">
									<label class="form-label">Kode Peminjaman</label>
									<input type="text" class="form-control" name="text-kodepeminjaman"
										placeholder="Kode Peminjaman" value="" readonly>
								</div>
								<div class="mb-3">
									<label class="form-label">NIS</label>
									<input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" class="form-control" name="number-nis"
										placeholder="NIS" required>
								</div>
								<div class="mb-3">
									<label class="form-label">Kode Buku</label>
									<input type="text" class="form-control" name="text-kodebuku"
										placeholder="Kode Buku" required>
								</div>
								<div class="mb-3">
									<label class="form-label">Jumlah</label>
									<input type="text" class="form-control" name="text-jumlah"
										value=1 readonly>
								</div>
								<div class="mb-3">
									<label class="form-label">TGL Peminjaman</label>
									<input type="date" id="demo" class="form-control" name="dt-peminjaman" required>
								</div>
								<div class="mb-3">
									<label class="form-label">TGL Pengembalian</label>
									<input type="date" id="demo2" class="form-control" name="dt-pengembalian" required>
								</div>
								<div class="mb-3">
									<label class="form-label">Kode Admin</label>
									<input type="text" class="form-control" name="text-kodeadmin"
										placeholder="Kode Admin" value="" readonly>
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
				<!-- Awal Modal Edit Data -->
				<div class="modal fade" id="modalEditData" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Transaksi Peminjaman</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="editPinjam.php">
									<div class="modal-body">
								<div class="mb-3">
									<label class="form-label">Kode Peminjaman</label>
									<input type="text" class="form-control" name="text-kodepeminjaman"
										placeholder="Kode Peminjaman" value="" readonly>
								</div>
								<div class="mb-3">
									<label class="form-label">NIS</label>
									<input type="number" oninput="" maxlength="4" class="form-control" name="number-nis"
										placeholder="NIS" value="" required>
								</div>
								<div class="mb-3">
									<label class="form-label">Kode Buku</label>
									<input type="text" class="form-control" name="text-kodebuku"
										placeholder="Kode Buku" value="" required>
								</div>
								<div class="mb-3">
									<label class="form-label">Jumlah</label>
									<input type="text" class="form-control" name="text-jumlah"
										placeholder="Nama Siswa" value=1 readonly>
								</div>
								<div class="mb-3">
									<label class="form-label">TGL Peminjaman</label>
									<input type="date" id="demo" class="form-control" name="dt-peminjaman" value="" required>
								</div>
								<div class="mb-3">
									<label class="form-label">TGL Pengembalian</label>
									<input type="date" id="demo2" class="form-control" name="dt-pengembalian" value="" required>
								</div>
								<div class="mb-3">
									<label class="form-label">Kode Admin</label>
									<input type="text" class="form-control" name="text-kodeapadmin"
										placeholder="Kode Admin" value="" readonly>
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