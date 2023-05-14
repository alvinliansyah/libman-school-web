@extends('components/masterLayoutAdmin')
@section('content')
<h1 class="title ">Siswa</h1>
			<ul class="breadcrumbs">
				<li><a href="{{route('dashboard')}}">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Siswa</a></li>
			</ul>
					<div class="card shadow">
					<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center>Data Kelas
					</center></h4>
						<div class="card-body">
						<div class="container">
							<table id="example" class="table table-striped table-hover" style="width:100%">
								<thead>
									<tr>
										<th>NO</th>
										<th>TINGKATAN</th>
										<th>KELAS</th>
										<th>JUMLAH SISWA</th>
										<th>AKSI</th>
									</tr>
								</thead>
								<tbody>
								<tr>
								<td>NO</td>
								<td>TINGKATAN</td>
								<td>KELAS</td>
								<td>JUMLAH SISWA</td>
										<td>
										<strong>
											<button type="button" class="btn btn-primary" >
												<a href="" style= "color:white; text-decoration: none; font-weight: normal;">
													<i class='bx bx-show-alt icon'></i>
												&nbsp;Lihat</a>
											</button>
										</strong>
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