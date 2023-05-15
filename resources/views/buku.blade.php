@extends('components/masterLayoutAdmin')
@section('content')
<h1 class="title">Buku</h1>
			<ul class="breadcrumbs">
				<li><a href="{{route('dashboard')}}">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Buku</a></li>
			</ul>
		<div class="card shadow">
		<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center>Data Jenis Buku
					</center></h4>
						<div class="card-body">
						<div class="container">
						<table id="example" class="table table-striped table-hover" style="width:100%">
							<thead>
								<tr>
									<th>NO</th>
									<th>JENIS BUKU</th>
									<th>JUMLAH</th>
									<th>AKSI</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>NO</td>
									<td>JENIS BUKU</td>
									<td>JUMLAH</td>
									<td>
									<div class="d-grid gap-3 d-md-flex justify-content-md">
											<strong><button type="button" class="btn btn-primary" ><a href="" style= "color:white; text-decoration: none; font-weight: normal;"><i class='bx bx-show-alt icon'></i>&nbsp;Lihat</a></strong></button>
									</div>
										</td>
				
								</tr>
							</tbody>
							<tfoot>
							</tfoot>
						</table>
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