@extends('components/masterLayoutAdmin')
@section('content')
			<h1 class="title">Dashboard</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>
			<div class="info-data">
				<div class="card shadow">
					<div class="head">
						<div>
							<h2>{{$data_buku+$peminjaman}}</h2>
							<p>Buku Keseluruhan</p>
						</div>
					</div>
					<span class="progress" data-value="100%"></span>
					<span class="label">bulan</span>
				</div>
				<div class="card shadow">
					<div class="head">
						<div>
							<h2>{{$data_buku}}</h2>
							<p>Buku Tersedia Di Perpustakaan</p>
						</div>
					</div>
					<span class="progress" data-value="100%"></span>
					<span class="label">bulan</span>
				</div>
				<div class="card shadow">
					<div class="head">
						<div>
							<h2>{{$peminjaman}}</h2>
							<p>Buku Sedang Proses Peminjaman</p>
						</div>
					</div>
					<span class="progress" data-value="100%"></span>
					<span class="label">bulan</span>
				</div>
				<div class="card shadow">
					<div class="head">
						<div>
							<h2>000</h2>
							<p>Total Siswa</p>
						</div>
					</div>
					<span class="progress" data-value="100%"></span>
					<span class="label">tahun</span>
				</div>
			</div>
	</br>
	<div class="row">
  <div class="col-sm-6">
				<div class="card shadow" style="height: 650px;">
					<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center>Chart Buku
					</center></h4>
						<div class="card-body">
						<div class="charts">
						<div id="chart" id="doughnut"></div>
						<canvas id="doughnut"></canvas>
					</div>
						</div>
						</div>
			</div>
			<div class="col-sm-6">
			<div class="card shadow" style="height: 650px;">
					<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center>Memerlukan Tindakan
					</center></h4>
						<div class="card-body">
						<div class="table-wrapper-scroll-y my-custom-scrollbar">
						<table class="table table-bordered table-striped mb-0">
						<tbody>
							<tr>
							<td>
							<span style="color:black; text-decoration: none; font-weight: 600; font-size: 16px;">(nama)<br/><span class="badge text-bg-danger p-3 bg-opacity-25 text-body" style="text-decoration: none; font-weight: 300; font-size: 14px;">Status : Buku (nama buku) Harus dikembalikan sebelum (jadwal)</span></span>
							</td>
							</tr>
							<tr>
							<td>
							<span style="color:black; text-decoration: none; font-weight: 600; font-size: 16px;">(nama)<br/><span class="badge text-bg-warning p-3 bg-opacity-25 text-body" style="text-decoration: none; font-weight: 300; font-size: 14px;">Status : Buku (nama buku) Harus dikembalikan sebelum (jadwal)</span></span>
							</td>
							</tr>
						</tbody>
						</table>

					</div>
					<br/>
					</div>
					</div>
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