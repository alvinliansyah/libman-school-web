@extends('components/masterLayoutAdmin')
@section('content')
<h1 class="title">Riwayat</h1>
			<ul class="breadcrumbs">
				<li><a href="{{route('dashboard')}}">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Riwayat</a></li>
			</ul>
					
					</div>
				</div>
		</div>
		<div class="card shadow">
					<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center>Riwayat Transaksi
					</center></h4>
						<div class="card-body">
						<div class="container">
						<table id="example" class="table table-striped table-hover" style="width:100%">
							<thead>
								<tr>
									<th>NO</th>
									<th>NAMA SISWA</th>
									<th>NIS</th>
									<th>JUDUL BUKU</th>
									<th>KODE BUKU</th>
									<th>TGL PEMINJAMAN</th>
									<th>TGL PENGEMBALIAN</th>
									<th>NAMA ADMIN</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>NO</td>
									<td>NAMA SISWA</td>
									<td>NIS</td>
									<td>JUDUL BUKU</td>
									<td>KODE BUKU</td>
									<td>TGL PEMINJAMAN</td>
									<td>TGL PENGEMBALIAN</td>
									<td>NAMA ADMIN</td>
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