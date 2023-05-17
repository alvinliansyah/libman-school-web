@extends('components/masterLayoutAdmin')
@section('content')
<h1 class="title">Siswa</h1>
			<ul class="breadcrumbs">
				<li><a href="dashboard">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Siswa</a>
			</li>
			</ul>
			<div class="card shadow">
			<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center>
			Data Kelas
					<strong><button type="button" class="btn btn-outline-light btn-sm float-end"><a href="#" data-bs-toggle="modal" data-bs-target="#modalTambahData" style= "font-size: 14.5px; color:white; text-decoration: none; font-weight: normal;"><i class='bx bx-add-to-queue icon'></i>&nbsp;Tambah Data</a></strong></button>
					</center></h4>
						<div class="card-body">
						<div class="container">
						<table id="example" class="table table-striped table-hover" style="width:100%">
							<thead>
								<tr>
								<th>NO</th>
								<th>Id_data_kelas</th>
								<th>TINGKATAN</th>
								<th>KELAS</th>
								<th>AKSI</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$i=1;
								?>
								@foreach($kelas as $k)
								<tr>
								<td><?php echo $i ?></td>
								<td>{{ $k->id_data_kelas }}</td>
								<td>{{ $k->tingkatan }}</td>
								<td>{{ $k->kelas }}</td>
								<td>
								<div class="d-grid gap-2 d-md-flex justify-content-md">
								<button type="button" class="btn btn-primary" >
												<a href="{{route('detailsiswa')}}" style= "color:white; text-decoration: none; font-weight: normal;">
													<i class='bx bx-show-alt icon'></i>
												&nbsp;Lihat</a>
											</button>
											<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditData<?=$i;?>"><i class='bx bx-edit icon bx-xs'></i>&nbsp;Edit</button>
											<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusData<?=$i;?>"><i class='bx bx-trash icon bx-xs'></i>&nbsp;Hapus</button>
								</div>
										</td>
						<!-- Awal Modal Tambah Data -->
						<div class="modal fade" id="modalTambahData" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Kelas</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="/siswa/create">
										@csrf
									<div class="modal-body">
									<div class="mb-3">
											<label class="form-label">Kode Kelas</label>
											<input type="text" class="form-control" name="text_kodekelast"
												placeholder="Kode Buku" required>
									</div>
									<div class="mb-3">
											<label class="form-label">Tingkatan</label>
											<select class="form-select" name="tingkatant">
												<option></option>
												<option value="VII">VII</option>
												<option value="VIII">VIII</option>
												<option value="IX">IX</option>
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Kelas</label>
											<select class="form-select" name="kelast">
												<option></option>
												<option value="A">A</option>
												<option value="B">B</option>
												<option value="C">C</option>
												<option value="D">D</option>
												<option value="E">E</option>
												<option value="G">G</option>
												<option value="H">H</option>
											</select>
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
						<div class="modal fade" id="modalEditData<?=$i;?>" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Kelas</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="/siswa/update">
										@csrf
									<div class="modal-body">
									<div class="mb-3">
											<label class="form-label">Kode Kelas</label>
											<input type="text" class="form-control" name="text_kodekelase"
											value='{{$k->id_data_kelas}}' placeholder="Kode Buku" readonly>
									</div>
									<div class="mb-3">
											<label class="form-label">Tingkatan</label>
											<select class="form-select" name="tingkatane">
												<option></option>
												<option value="VII">VII</option>
												<option value="VIII">VIII</option>
												<option value="IX">IX</option>
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Kelas</label>
											<select class="form-select" name="kelase">
												<option></option>
												<option value="A">A</option>
												<option value="B">B</option>
												<option value="C">C</option>
												<option value="D">D</option>
												<option value="E">E</option>
												<option value="G">G</option>
												<option value="H">H</option>
											</select>
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
						<div class="modal fade" id="modalHapusData<?=$i;?>" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data?</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="/siswa/delete">
										@csrf
									<div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
									<div class="mb-3">
											<input type="hidden" class="form-control" name="kodekelash"
											value='{{$k->id_data_kelas}}'>
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
						<?php
							$i++;
							?>
							</tr>	
							</tbody>
						@endforeach
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