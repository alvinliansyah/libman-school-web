@extends('components/masterLayoutAdmin')
@section('content')
<h1 class="title">Pelayanan Pelanggan</h1>
			<ul class="breadcrumbs">
				<li><a href="{{route('dashboard')}}">Home</a></li>
				<li class="divider">/</li>
                <li><a href="#" class="active">Bantuan</a></li>
                <li class="divider">/</li>
				<li><a href="#" class="active">Pelayanan Pelanggan</a></li>
			</ul>
			<div class="card shadow">
					<h4 class="card-header text-bg-primary mb-3 fw-semibold"><center>Pelayanan Pelanggan
					</center></h4>
						<div class="card-body">
						<center>
							<img src="{!! asset('assets/img/Logo2.png') !!}" style="width: 250px;" alt="">
						</center>
						<br/>
						<div class="text">
						<center>
      					<div class="topic">Jika mengalami kendala selama penggunaan aplikasi, anda dapat menghubungi beberapa Pelayanan Pelanggan berikut :</div>
    					</div>
						</center>
						<br/>
						<center>
						<table class="table2">
						<thead>
							<th><i class='bx bxl-instagram icon'></i>&nbsp;&nbsp;Instagram</th>
							<th><i class='bx bxl-whatsapp icon'></i>&nbsp;&nbsp;WhatsApp</th>
							<th><i class='bx bx-envelope icon'></i>&nbsp;&nbsp;Email</th>
						</thead>
						<tbody>
						<tr>
							<td>@ilhamikhwann</td>
							<td>+62 856 4954 9458</td>
							<td>ilhamikhwaan@gmail.com</td>
						</tr>
						</table>
					</tbody>
					</center>	
					<br/>
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