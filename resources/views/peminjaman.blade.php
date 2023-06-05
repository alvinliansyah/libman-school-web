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
									<th>NAMA SISWA</th>
									<th>KODE BUKU</th>
									<th>JUDUL BUKU</th>
									<th>JUMLAH</th>
									<th>TGL PEMINJAMAN</th>
									<th>TGL PENGEMBALIAN</th>
									<th>ID ADMIN</th>
									<th>NAMA ADMIN</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$i=1;
								?>
								@foreach($peminjaman as $p)
								<tr>
									<td><?php echo $i ?></td>
									<td>{{ $p->id_peminjaman }}</td>
									<td>{{ $p->NIS }}</td>
									<td>{{ $p->nama_siswa }}</td>
									<td>{{ $p->id_buku }}</td>
									<td>{{ $p->judul_buku }}</td>
									<td>{{ $p->qty }}</td>
									<td>{{ $p->tanggal_peminjaman }}</td>
									<td>{{ $p->tanggal_pengembalian }}</td>
									<td>{{ $p->id_admin }}</td>
									<td>{{ $p->nama_admin }}</td>
								</tr>
						<?php
								$i++;
								?>
						@endforeach
							</tbody>
						</table>
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
							<form method="POST" action="/peminjaman/create">
								@csrf
							<div class="modal-body">
								<div class="mb-3">
									<label class="form-label">Kode Peminjaman</label>
									<input type="text" class="form-control" name="text_kodepeminjaman"
										placeholder="Kode Peminjaman" value="{{$baru->baru}}" readonly>
								</div>
								<div class="mb-3">
											<label class="form-label">NAMA SISWA</label>
											<select class="form-select" name="text_nis">
												@foreach($siswa as $s)
												<option value="{{ $s->NIS }}">{{ $s->NIS .'-'. $s->nama_siswa }}</option>
												@endforeach
											</select>
								</div>
								<div class="mb-3">
											<label class="form-label">Judul Buku</label>
											<select class="form-select" name="text_kodebuku">
												@foreach($buku as $b)
												<option value="{{ $b->id_buku }}">{{ $b->judul_buku }}</option>
												@endforeach
											</select>
								</div>
								<div class="mb-3">
									<input type="hidden" class="form-control" name="text_jumlah"
										value=1 readonly>
								</div>
								<div class="mb-3">
									<label class="form-label">TGL Peminjaman</label>
									<input type="date" id="demo" class="form-control" name="dt_peminjaman" required>
								</div>
								<div class="mb-3">
									<label class="form-label">TGL Pengembalian</label>
									<input type="date" id="demo2" class="form-control" name="dt_pengembalian" required>
								</div>
								<div class="mb-3">
									<label class="form-label">Kode Admin</label>
									<input type="text" class="form-control" name="text_kodeadmin"
										placeholder="Kode Admin" value="{{session()->get('nama_admin')}}" readonly>
										<input type="hidden" name="id_admin" value="{{ session()->get('id_admin') }}">
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