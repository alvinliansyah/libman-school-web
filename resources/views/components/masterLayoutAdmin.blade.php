<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{!! asset('assets/DataTables/DataTables-1.12.1/css/dataTables.bootstrap5.min.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('assets/DataTables/Buttons-2.2.3/css/buttons.bootstrap5.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <link rel="website icon" type="png" href="{!! asset('assets/img/Logo.png') !!}">
    <title>Libman School</title>
</head>
<body>
<div class="loader-wrapper">
	<span class="loader"><span class="loader-inner"></span></span>
	</div>	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="{!! asset('assets/img/Logo.png') !!}" alt="">
			<span class="brand">Libman School</span>
		</a>
		<ul class="side-menu">
			<li><a href="{{route('dashboard')}}" class=""><i class='bx bx-home icon'></i> Dashboard</a></li>
			
			<li class="divider" data-text="data master">Data Master</li>
			<li><a href="{{route('siswa')}}"><i class='bx bx-group icon'></i>Siswa</a></li>
			<li><a href="{{route('admin')}}"><i class='bx bx-user icon'></i>Admin</a></li>
			<li><a href="{{route('buku')}}"><i class='bx bx-book icon'></i>Buku</a></li>
			<li class="divider" data-text="transaksi">Transaksi</li>
			<li><a href="{{route('peminjaman')}}"><i class='bx bx-arrow-from-bottom icon'></i>Peminjaman</a></li>
			<li><a href="{{route('pengembalian')}}"><i class='bx bx-arrow-to-bottom icon'></i>Pengembalian</a></li>
			<li><a href="{{route('riwayat')}}"><i class='bx bx-history icon'></i>Riwayat</a></li>
        <ul class="buttom-side-menu">
            <li>
				<a href="#"><i class='bx bx-help-circle icon'></i> Bantuan <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="{{route('pelayananpelanggan')}}">Pelayanan Pelanggan</a></li>
					<li><a href="{{route('tentangaplikasi')}}">Tentang Aplikasi</a></li>
				</ul>
			</li>
            <li><a href="{{route('logout')}}"><i class='bx bx-log-out-circle icon'></i>Keluar</a></li>
        </ul>
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav >
			<i class='bx bx-menu toggle-sidebar bx-sm' ></i>
			<form action="#">
			</form>
			<div id="MyClockDisplay" class="clock float-start" style="line-height: 35px; color: white; font-weight: 600; font-size: 15px; font-family: 'Open Sans', sans-serif; letter-spacing: 3px; position: absolute; top: 15px; right: 80px;" onload="showTime()"></div>
			&nbsp
			<a style="color:white; text-decoration: none; font-weight: 600; font-size: 18px; position: absolute; top: 18px; right: 65px;">|</a>
			&nbsp
			<div class="profile">
			@foreach($gambar as $g)
						@if($g->id_admin == session()->get('id_admin'))
						@if($g->gambar == null)
						<center><div><img src="assets/img/default-avatar.png" alt="" class="img-profile"></div></center>
						@else
						<center><div><img src="assets/img/admin/{{$g->gambar}}" alt="" class="img-profile"></div></center>
						@endif
						@endif
						@endforeach
				<ul class="profile-link">
					<li><a href="{{route('profile')}}"><i class='bx bx-user icon'></i> Profile</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
            @yield('content')
        </main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
	<script src="{!! asset('assets/js/script.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/DataTables/DataTables-1.12.1/js/jquery.dataTables.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/DataTables/DataTables-1.12.1/js/dataTables.bootstrap5.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/DataTables/Buttons-2.2.3/js/dataTables.buttons.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/DataTables/Buttons-2.2.3/js/buttons.bootstrap5.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/DataTables/JSZip-2.5.0/jszip.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/DataTables/pdfmake-0.1.36/pdfmake.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/DataTables/pdfmake-0.1.36/vfs_fonts.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/DataTables/Buttons-2.2.3/js/buttons.html5.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/DataTables/Buttons-2.2.3/js/buttons.print.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('assets/DataTables/Buttons-2.2.3/js/buttons.colVis.min.js') !!}"></script>
	<script>
		$(window).on("load",function(){
			$(".loader-wrapper").fadeOut("slow");
		});
	</script>
    <script>
        const ctx = document.getElementById('doughnut').getContext('2d');
		const myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ['Buku Tersedia Di Perpustakaan', 'Buku Sedang Proses Peminjaman'],
				datasets: [{
					label: 'Chart Buku',
					data: [50, 50],
					backgroundColor: [
						'rgba(255, 139, 3, 1)',
						'rgba(255, 76, 29, 1)'
					],
					borderColor: [
						'rgba(255, 139, 3, 1)',
						'rgba(255, 76, 29, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				responsive: true
			}
		});
    </script>
    	<script>
	$(document).ready(function() {
		var table = $('#example').DataTable( {
		scrollY: 330,
        scrollX: true,
        lengthChange: false,
		buttons: [
            'colvis', 'excel', 'pdf', 'print'
        ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
	} );
	</script>
		<script>
	const file_fotobuku = document.getElementById('file-fotobuku');

	file_fotobuku.onchange = () => {
	const [image_fotobuku] = file_fotobuku.files
	if (image_fotobuku.size > 2000000) {
		if(image_fotobuku){
		alert('ukuran file maksimal 2mb');
		file_fotobuku.value = '';
		return false;	
	} else if(image_fotobuku.type != 'image/jpeg' && image_fotobuku.type != 'image/png' && image_fotobuku.type != 'image/jpg') {
		alert('type file harus .jpg .png .jpeg');
			imginp_rental.value = '';
			return false;
	} 
	}
	}
	</script>
	<script>
	const file_fotoprofile = document.getElementById('file-fotoprofile');

	file_fotoprofile.onchange = () => {
	const [image_fotoprofile] = file_fotoprofile.files
	if (image_fotoprofile.size > 2000000) {
		if(image_fotoprofile){
		alert('ukuran file maksimal 2mb');
		file_fotoprofile.value = '';
		return false;	
	} else if(image_fotoprofile.type != 'image/jpeg' && image_fotoprofile.type != 'image/png' && image_fotoprofile.type != 'image/jpg') {
		alert('type file harus .jpg .png .jpeg');
			imginp_rental.value = '';
			return false;
	} 
	}
	}
</script>
@include('sweetalert::alert')

</body>
</html>
