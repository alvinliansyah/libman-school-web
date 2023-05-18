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
								<?php
								$i=1;
								?>
								@foreach($riwayat as $r)
								<tr>
									<td><?php echo $i ?></td>
									<td>{{ $r->nama_siswa }}</td>
									<td>{{ $r->NIS }}</td>
									<td>{{ $r->judul_buku }}</td>
									<td>{{ $r->id_buku }}</td>
									<td>{{ $r->tanggal_peminjaman }}</td>
									<td>{{ $r->tanggal_pengembalian }}</td>
									<td>{{ $r->nama_admin }}</td>
								</tr>
								<?php
								$i++;
								?>
						@endforeach
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