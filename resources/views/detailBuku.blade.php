@extends('components/masterLayoutAdmin')
@section('content')
<h1 class="title">Buku
			<div class="card float-end shadow" style="height: 3.5rem; width: 25rem; top: 10px;">
			<div class="card-header text-bg-primary" style="padding: 4px"></div>
			<div class="card-body">
				@foreach($get as $g)
			<center><p class="card-title" style="font-family: 'Open Sans', sans-serif; font-weight: 1000; font-size: 17px; line-height: 14px;">{{ $g->judul_buku }}<strong><a class="divider" style= "color:black; text-decoration: none; font-weight: 600; font-size: 18px; line-height: 10px;"></a></strong></p></center>
				@endforeach
			</div>
			</div>
			</h1>
			<ul class="breadcrumbs">
				<li><a href="dashboard">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Buku</a>
			</li>
			</ul>
			<div class="card shadow">
			<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center><strong><button type="button" class="btn dropdown border-0 float-start" style="position: relative; top: -3px; left: -15px;"><a href="{{route('buku')}}"style= "color:white; text-decoration: none; font-weight: normal;"><i class='bx bx-chevron-left icon bx-md'></i></a></strong></button>
			Data Stok Buku
					<strong><button type="button" class="btn btn-outline-light btn-sm float-end"><a href="#" data-bs-toggle="modal" data-bs-target="#modalTambahData" style= "font-size: 14.5px; color:white; text-decoration: none; font-weight: normal;"><i class='bx bx-add-to-queue icon'></i>&nbsp;Tambah Data</a></strong></button>
					</center></h4>
						<div class="card-body">
						<div class="container">
						<table id="example" class="table table-striped table-hover" style="width:100%">
							<thead>
								<tr>
									<th>NO</th>
									<th>ID BUKU</th>
									<th>JUMLAH</th>
									<th>INFORMASI WAKTU</th>
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
								<td>{{ $b->jumlah }}</td>
								<td>{{ $b->updated_at }}</td>
								<td>								
										</td>
						<!-- Awal Modal Tambah Data -->
						<div class="modal fade" id="modalTambahData" data-bs-backdrop="static" data-bs-keyboard="false"
							tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header text-bg-primary mb-3">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Stok Buku</h1>
										<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<form method="POST" action="/detailBuku/create">
										@csrf
									<div class="modal-body">
										<div class="mb-3">
											<label class="form-label">jumlah</label>
											<input type="number" class="form-control" name="number_jumlah1"
												placeholder="jumlah" required>
										</div>
										</div>
										<div class="mb-3">
											<input type="hidden" class="form-control" name="kode_buku1"
												value="{{ $detail_buku->id_buku }}">
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