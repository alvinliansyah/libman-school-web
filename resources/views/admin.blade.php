@extends('components/masterLayoutAdmin')
@section('content')
<h1 class="title">Admin</h1>
			<ul class="breadcrumbs">
				<li><a href="dashboard">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Admin</a></li>
			</ul>
			<div class="card shadow">
			<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center>Data Admin
					<strong><button type="button" class="btn btn-outline-light btn-sm float-end"><a href="#" data-bs-toggle="modal" data-bs-target="#modalTambahData" style= "font-size: 14.5px; color:white; text-decoration: none; font-weight: normal;"><i class='bx bx-add-to-queue icon'></i>&nbsp;Tambah Data</a></strong></button>
					</center></h4>
						<div class="card-body">
						<div class="container">
						<table id="example" class="table table-striped table-hover" style="width:100%">
							<thead>
								<tr>
									<th>NO</th>
									<th>KODE ADMIN</th>
									<th>NAMA ADMIN</th>
									<th>PASSWORD</th>
									<th>FOTO PROFILE</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i=1;
								?>
								@foreach($admin as $p)
								<tr>
									<td><?php echo $i ?></td>
									<td>{{ $p->id_admin }}</td>
									<td>{{ $p->nama_admin }}</td>
									<td>{{ $p->password }}</td>
									<td>{{ $p->gambar }}</td>
								</tr>
							</tbody>
							<tfoot>
							</tfoot>
							<?php
								$i++;
								?>
						
						<!-- Awal Modal -->
						<div class="modal fade" id="modalTambahData" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Admin</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="admin/create">
										@csrf
									<div class="modal-body">
										<div class="mb-3">
											<label class="form-label">ID Admin</label>
											<input type="text" class="form-control" name="text_id" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Nama Admin</label>
											<input type="text" class="form-control" name="text_namalengkapadmin"
												placeholder="Nama Admin" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input type="password" class="form-control" name="password"
												placeholder="Password" required>
										</div>
										<!-- <div class="mb-3">
											<label class="form-label">Foto Admin</label>
											<input id="file_fotoprofile" type="file" class="form-control" name="file_fotoprofile">
									</div> -->
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary" name="button-simpan">Simpan</button>
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
									</div>
									</form>
								</div>
							</div>
						</div>
						@endforeach
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