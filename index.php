<!DOCTYPE html>
<html lang="en">
<head>
  <title>Belajar Program</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="LOGO CV RUKUN JAYA.jpg" alt="avatar Logo" style="width:40px;" class="rounded-pill"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/belajar_program/index.php?page=siplah">
          <span style="color: pink;">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://siplahtelkom.com/store/413-cv-rukun-jaya"><span style="color: blue;">Siplah</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://e-katalog.lkpp.go.id/productsearchcontroller/listproduk?authenticityToken=2612b30b540a6d921a3c2c711fe601071574a57c&cat=&commodityId=14466&q=&jenis_produk=&kabid=270&pid=652691&mid=&tkdn_produk=-99&sni=-99&btu_id=&gt=&lt="><span style="color: green;">EKatalog</span></a>
          
          <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Contact</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="whatsapp.php">WhatsApp</a></li>
    <li><a class="dropdown-item" href="handphone.php">Handphone</a></li>
    <li><a class="dropdown-item" href="email.php">Email</a></li>
  </ul>

        </li>
      </ul>
      <ul>
      <li>
        <div class="container-fluid">
        <form class="d-flex" onsubmit="return false">
        <input class="form-control me-2" type="text" placeholder="Search" id="search-input">
        <button class="btn btn-primary" type="button" onclick="search()">Search</button>
        </form>
        </div>
          </li>
</ul>

<script>
  function search() {
    const query = document.getElementById('search-input').value;
    const url = `https://www.google.com/search?q=${encodeURIComponent(query)}`;
    window.location.href = url; // Mengarahkan ke URL pencarian Google
  }
</script>
    </div>
  </div>
</nav>

<div class="container-fluid mt-1">
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 75vh;">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="siplah.png" alt="siplah telkom" class="d-block w-80">
                </div>
                <div class="carousel-item">
                    <img src="ekatalog.png" alt="ekatalog" class="d-block w-80">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>


<div class="container-fluid mt-1" style="text-align: justify;">
<h4>   CV RUKUN JAYA</h4>
  <p>Dengan kerendahan hati kami mengaturkan rasa
terima kasih kami kepada Bapak/Ibu/Sdr(i) yang telah
berkenan membaca Company Profile kami.</p>

<p>Kami mengapresiasi kepedulian Bapak/Ibu/Sdr(i)
sebagai perwujudan atas keinginan Bapak/Ibu/Sdr(i) untuk
bermitra bersama kami adalah perusahaan yang bergerak
dibidang pengadaan barang dan jasa.</p>

<p>Merupakan metamorfosis dari marketing
perusahaan Penerbitan dan distributor terbesar di Indonesia.
Menginspirasi Kami untuk mendirikan badan usaha yaitu CV maka berdirilah CV RUKUN JAYA pada Tahun 2017, yang telah
banyak membantu klien dalam mencapai tujuan melalui
layanan barang dan jasa yang Bermutu dan Membanggakan
serta menjunjung Profesionalisme dalam mendukung program
di bidang pendidikan. Fokus bisnis kami adalah kepuasan
konsumen/pelanggan, sebab itu kami senantiasa memakai
metode kerja yang benar dan standard prosedure pelayanan
yang terbaik. Sebagai perusahaan baru, kami mengikuti trend
perkembangan pendidikan dan tuntutan bisnis global.</p>
 
<p>Besar harapan kami untuk dapat bermitra bersama
Bapak/Ibu/Sdr(i) dan ikut serta dalam mendukung program
pemerintah dan memberi konstribusi positif. Semoga hasil kerja kami dapat memberi rasa
kebanggaan dan membawa manfaat untuk klien/mitra kami di
seluruh Indonesia, dan dunia pada umumnya.</p>

<nav class =" navbar navbar-expand-sm navbar-dark bg-dark">

</nav>

<div class="footer">
    <p>Hak Cipta © 2024</p>
</div>


</body>
</html>
