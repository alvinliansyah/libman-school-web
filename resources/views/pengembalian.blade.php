@extends('components/masterLayoutAdmin')
@section('content')
			<h1 class="title">Pengembalian</h1>
			<ul class="breadcrumbs">
				<li><a href="{{route('dashboard')}}">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Pengembalian</a></li>
			</ul>
		<div class="card shadow">
					<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center>Transaksi Pengembalian
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
									<td>ID ADMIN</td>
									<td>
											<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalSelesaiData" style= "color:white; text-decoration: none; font-weight: normal;"><i class='bx bx-check-square icon bx-xs'>&nbsp;Selesai</i></button>	
									</td>
				<!-- Awal Modal Selesai Data -->
				<div class="modal fade" id="modalSelesaiData" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Selesai Transaksi Pengembalian</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="">
									<div class="modal-body">
								<div class="mb-3">
									<label class="form-label">Kode Pengembalian</label>
									<input type="text" class="form-control" name="text-kodepengembalian"
										placeholder="Kode Pengembalian" value="" readonly>
								</div>
								<div class="mb-3">
									<label class="form-label">Kode Peminjaman</label>
									<input type="text" class="form-control" name="text-kodepeminjaman"
										value="" readonly>
								</div>
								<div class="mb-3">
									<label class="form-label">NIS</label>
									<input type="number" class="form-control" name="number-nis"
										value="" readonly>
								</div>
								<div class="mb-3">
									<label class="form-label">Kode Buku</label>
									<input type="text" class="form-control" name="text-kodebuku"
										value="" readonly>
								</div>
								<div class="mb-3">
									<label class="form-label">Jumlah</label>
									<input type="text" class="form-control" name="text-jumlah"
										value=1 readonly>
								</div>
								<div class="mb-3">
									<label class="form-label">TGL Peminjaman</label>
									<input type="date" class="form-control" name="dt-peminjaman" value="" readonly>
								</div>
								<div class="mb-3">
									<label class="form-label">ID Admin</label>
									<input type="text" class="form-control" name="text-kodeadmin"
										value="" readonly required>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-success" name="button-selesai">Selesai</button>
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
							</div>
									</form>
								</div>
							</div>
						</div>
						</tr>
							</tbody>
						</table>
						<!-- Akhir Modal -->
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