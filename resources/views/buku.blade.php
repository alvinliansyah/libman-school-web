@extends('components/masterLayoutAdmin')
@section('content')
<h1 class="title">Buku</h1>
			<ul class="breadcrumbs">
				<li><a href="dashboard.php">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Buku</a></li>
			</ul>
			<div class="card shadow">
			<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center>
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
									<th>PENERBIT</th>
									<th>TAHUN TERIMA</th>
									<th>JUMLAH</th>
									<th>DESKRIPSI</th>
									<th>GAMBAR</th>
									<th>AKSI</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$i=1;
								?>
								@foreach($buku as $b)
								<tr>
									<td><?php echo $i ?></td>
									<td>{{ $b->id_buku }}</td>
									<td>{{ $b->judul_buku }}</td>
									<td>{{ $b->semester }}</td>
									<td>{{ $b->penerbit }}</td>
									<td>{{ $b->tahun_terima }}</td>
									<td>{{ $b->jumlah }}</td>
									<td>{{ $b->deskripsi }}</td>
									<td>{{ $b->gambar }}</td>
									<td>
									<div class="d-grid gap-2 d-md-flex justify-content-md">
									<button type="button" class="btn btn-primary" >
												<a href="{{route('detailBuku', ['id_buku' => $b->id_buku])}}" style= color:white; text-decoration: none; font-weight: normal;">
													<i class='bx bx-show-alt icon'></i>
												&nbsp;Lihat</a>
											</button>
											<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditData<?=$i;?>"><i class='bx bx-edit icon bx-xs'>&nbsp;Edit</i></button>
											<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusData<?=$i;?>"><i class='bx bx-trash icon bx-xs'></i>&nbsp;Hapus</button>
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
									<form method="POST" action="buku/create" enctype="multipart/form-data">
										@csrf
									<div class="modal-body">
										<div class="mb-3">
											<label class="form-label">Judul</label>
											<input type="text" class="form-control" name="text_judul"
												placeholder="Judul" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Semester</label>
											<select class="form-select" name="text_semester">
												<option value="1">1</option>
												<option value="2">2</option>
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Penerbit</label>
											<input type="text" class="form-control" name="text_penerbit"
												placeholder="Judul" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Tahun Terima</label>
											<input type="text" class="form-control" name="text_tahunterima"
												placeholder="Judul" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Jumlah</label>
											<input type="number" class="form-control" name="text_jumlah" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Deskripsi</label>
											<input type="text" class="form-control" name="text_deskripsi"
											placeholder="Deskripsi" required>
										</div>
										<!-- <div class="mb-3">
											<label class="form-label">Foto Buku</label>
											<input id="file-fotobuku" accept="image/*" type="file" class="form-control" name="file_fotobuku">
										</div> -->
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
						<div class="modal fade" id="modalEditData<?=$i;?>" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Buku</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="/buku/update" enctype="multipart/form-data">
										@csrf
									<div class="modal-body">
										<div class="mb-3">
											<label class="form-label">Kode Buku</label>
											<input type="text" class="form-control" name="text_kodebukue"
											value="{{ $b->id_buku }}" readonly>
										</div>
										<div class="mb-3">
											<label class="form-label">Judul</label>
											<input type="text" class="form-control" name="text_judule"
											value='{{$b->judul_buku}}' placeholder="Judul" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Semester</label>
											<select class="form-select" name="text_semester">
												<option value="1">1</option>
												<option value="2">2</option>
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Penerbit</label>
											<input type="text" class="form-control" name="text_penerbite"
											value='{{$b->penerbit}}' placeholder="Judul" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Tahun Terima</label>
											<input type="text" class="form-control" name="text_tahunterimae"
											value='{{$b->tahun_terima}}' placeholder="Judul" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Jumlah</label>
											<input type="number" class="form-control" name="text_jumlahe" 
											value='{{$b->jumlah}}' required>
										</div>
										<div class="mb-3">
											<label class="form-label">Deskripsi</label>
											<input type="text" class="form-control" name="text_deskripsie"
											value='{{$b->deskripsi}}' placeholder="Deskripsi" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Foto Buku</label>
											<input id="file-fotobuku" accept="image/*" type="file" class="form-control" name="file_fotobukue" value ="{{ $b->gambar }}" required>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary"
											name="button-submiteditdata">Simpan</button>
										<button type="button" class="btn btn-secondary"
											data-bs-dismiss="modal">Keluar</button>
									</div>
									</div>
									</form>
								</div>
							</div>
						</div>
						<!-- Akhir Modal -->
						<!-- Awal Modal Hapus Data -->
						<div class="modal fade" id="modalHapusData<?=$i;?>" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data?</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="/buku/delete">
										@csrf
									<div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
									<div class="mb-3">
											<input type="hidden" class="form-control" name="text_kodebukuh"
											value="{{ $b->id_buku }}" required>
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
						<?php
								$i++;
						?>
						@endforeach
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