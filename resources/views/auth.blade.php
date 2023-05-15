<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Libman School</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{!! asset('assets/css/style-login.css') !!}">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="website icon" type="png" href="{!! asset('assets/img/Logo.png') !!}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="loader-wrapper">
	<span class="loader"><span class="loader-inner"></span></span>
	</div>
  <!-- navgaition menu -->
  <nav>
    <div class="navbar">
      <div class="logo">
      <img src="{!! asset('assets/img/Logo.png') !!}" alt="">
      <span class="logo">Libman School</span></div>
      <ul class="menu">
          <li><a href="#login">Masuk</a></li>
          <li><a href="#tentang_aplikasi">Tentang Aplikasi</a></li>
          <li><a href="#pelayanan_pelanggan">Pelayanan Pelanggan</a></li>
          <div class="cancel-btn">
            <i class="fas fa-times"></i>
          </div>
      </ul>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>

<!-- -->
<!-- Login Section Start -->
<section class="login" id="login">
  <div class="login-content">
   <div class="menu">
       <div class="container">
           <input type="checkbox" id="flip">
           <div class="cover" >
             <div class="front">
               <img src="{!! asset('assets/img/wander-fleur-1lmGTHdQdjM-unsplash.jpg') !!}"  alt="">
               <img src="{!! asset('assets/img/logosmp1bangsal.png') !!}" style= "width: 90px; height: 90px; position: absolute; top: 140px; right: 160px; padding: none; border-radius: 1px;" alt="">
               <div class="text">
                 <span class="text-1">APLIKASI MANAJEMEN PERPUSTAKAAN</span>
                 <span class="text-2">SMP Negeri 1 Bangsalsari</span>
               </div>
             </div>
             <div class="back">
               <img class="backImg" src="{!! asset('assets/img/wander-fleur-1lmGTHdQdjM-unsplash.jpg') !!}" alt="">
               <img src="{!! asset('assets/img/logosmp1bangsal.png') !!}" style= "width: 90px; height: 90px; position: absolute; top: 140px; right: 160px; padding: none; border-radius: 1px;" alt="">
               <div class="text">
                 <span class="text-1">APLIKASI MANAJEMEN PERPUSTAKAAN</span>
                 <span class="text-2">SMP Negeri 1 Bangsalsari</span>
               </div>
             </div>
           </div>
           <div class="forms">
               <div class="form-content">
                 <div class="login-form">
                   <header>Masuk</header>
                   <br/>
               <p style="line-height:1px;">Masukkan Nama Admin dan</p>
               <p>Password untuk melanjutkan ke halaman berikutnya</p>
                 <form method="post" action="cek_login.php">
                     <div  class="field input-field">
                       <input type="text" class="form-control" style="height: 50px;" placeholder="Nama Admin" name ="user" required>
                     </div>
                     <div  class="field input-field">
                       <input type="password" class="form-control" style="height: 50px;" placeholder="Password" name ="pass" required>
                     </div>
                     <div class="text"><label for="flip">Lupa Password?</label></div>
                     <div class="button input-box">
                       <input type="submit" value="Masuk">
                     </div>
                   </form>
                 </div>
                 <div class="forgetPassword-form">
                   <header>Lupa Password</header>
                   <br/>
                   <p>Silahkan masukkan Password baru anda</p>
               <form action="lupaPassword.php" method="POST">
                   <div class="field input-field">
                       <input type="text" class="form-control" style="height: 50px;" placeholder="Nama Admin" name="nama" required>
                     </div>
                     <div class="field input-field">
                       <input type="password" class="form-control" style="height: 50px;" placeholder="Password" name="password" required>
                     </div>
                     <div class="field input-field">
                       <input type="password" class="form-control" style="height: 50px;" placeholder="Konfirmasi password" name="konfirm-password" required>
                     </div>
                     <div class="button input-box">
                       <input type="submit" value="Simpan" name="simpan">
                     </div>
                     <div class="text forgetPassword-text"><label for="flip">Kembali ke masuk</label></div>
                   </div>
             </form>
           </div>
           </div>
           </div>
  </div>
</section>

<!-- About Section Start -->
<section class="tentang_aplikasi" id="tentang_aplikasi">
 <div class="content">
   <div class="title"><span>Tentang Aplikasi</span></div>
   
 <div class="tentang_aplikasi-details">
   <div class="text">
     <p style="text-indent: 45px;">Libman School merupakan sebuah aplikasi manajemen perpustakaan yang berfungsi untuk memudahkan penggunanya untuk mengatur segala aktivitas di dalam perpustakaan secara cepat dan efisien. Libman School berasal dari pengertian dari keseluruhan fungsi aplikasi ini, Kata awal “Lib” kami ambil dari kata “Library” yang berarti perpustakaan dan “Man” kami ambil dari kata “Management” yang berarti pengelolaan. </p>
     <p style="text-indent: 45px;">Aplikasi ini kami rancang dengan dua jenis versi yaitu mobile dan website, Keduanya memiliki fungsi berbeda namun saling melengkapi. Website digunakan oleh admin untuk melakukan manajemen dan mengolah data dalam perpustakaan, sedangkan Mobile diperuntukan untuk pengguna kalangan umum untuk melakukan transasksi peminjaman dan pengembalian buku.</p>
     <p style="text-indent: 45px;">Selain fitur utama dalam website yang disebutkan di atas, kami juga menyediakan bebagai fitur yang dapat memudahkan dan mempercepat kineja admin dalam mengelola data seperti eksport dan import dari file PDF, Excel, Scan Barcode cerdas menggunakan kartu perpustakaan dalam melakukan Transaksi, Selain itu admin juga dapat mengedit database secara real time dengan mudah dan cepat.</p>
     <p style="text-indent: 45px;">Dalam versi mobile juga memiliki berbagai fitur yang menarik dan mudah digunakan oleh pengguna, seperti fitur pemberithuan memerlukan tindakan yang berfungsi untuk memperlihatkan pengguna mengenai status batas waktu peminjaman agar pengguna tidak melewati batas peminjaman buku. Selain itu juga ada fitur tambah favorite yang berfungsi untuk menambahkan buku ke daftar favorite sebagai pengingat buku yang akan dipinjam di kemudian hari tanpa harus mencarinya kembali.</p>
   </div>
 </div>
 </div>
</section>

<!-- Contact Me section Start -->
<section class="pelayanan_pelanggan" id="pelayanan_pelanggan">
 <div class="content">
   <div class="title"><span>Pelayanan Pelanggan</span></div>
   <div class="text">
     <div class="topic">Jika mengalami kendala selama penggunaan aplikasi, anda dapat menghubungi beberapa Pelayanan Pelanggan berikut :</div>
   </div>
   <br/>
   <center>
     <table class="table">
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
 </div>
</section>

<!-- Footer Section Start -->
<footer>
 <div class="text">
   <span>Dibuat Oleh <a href="#">Libman School</a> | &#169; 2022 Semua Hak Dilindungi Undang-Undang</span>
 </div>
</footer>

  <script src="{!! asset('assets/js/script-login.js') !!}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
		$(window).on("load",function(){
			$(".loader-wrapper").fadeOut("slow");
		});
	</script>
</body>
</html>
