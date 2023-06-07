<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SEJAHTERA-ONLINE | {{ $tittle }} </title>
  <!--style-->
  
  <link href="asset/css/index.css" rel="stylesheet">
  <link href="asset/css/responsive.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!--font-->
  <link
    href="https://fonts.googleapis.com/css2?family=Acme&family=Fredoka+One&family=Kanit&family=Nerko+One&family=Righteous&family=Secular+One&display=swap"
    rel="stylesheet">
    
  <!--icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>
<body>
  {{-- <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container">
        <a class="navbar-brand" href="/">Sejahtera Online</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">LAYANAN KESEHATAN</a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                      <li><a class="dropdown-item" href="blog-home.html">TES KESEHATAN LANSIA</a></li>
                      <li><a class="dropdown-item" href="blog-post.html">TES KESEHATAN MENTAL</a></li>
                      <li><a class="dropdown-item" href="blog-post.html">TES BMI</a></li>
                  </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="/artikel">ARTIKEL</a></li>
              <li class="nav-item"><a class="nav-link" href="/cariDokter">CARI DOKTER</a></li>
              <li class="nav-item"><a class="nav-link" href="/aboutMe">ABOUT ME</a></li>
              <li class="nav-item"><a class="nav-link" href="/login">LOGIN</a></li>

            </ul>
        </div>
    </div>
  </nav> --}}
  {{-- <nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="asset/img/logo.jpg" alt="Logo" width="60" height="60" class="d-inline-block align-text-center mb-2">
        <span>Sejahtera Online </span>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="page/loginpage.php"><img src="asset/img/person.svg" alt="login" height="40" width="40"></i></a>
          </li>
        </ul>
        <b id="hamburger" onclick="showMenu();">&#8801;</b>
      </a>
    </div>
  </nav>

  <div class="nav" id="menu_vertikal">
    <span>
      <li class="nav-item dropdown "></li>
    </span>
    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <span>LAYANAN KESEHATAN</span>
    </a>

      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="https://satupersen.net/quiz/tes-sehat-mental">TES KESEHATAN LANSIA</a></li>
        <li><a class="dropdown-item" href="/pageMental">TES KESEHATAN MENTAL</a></li>
        <li><a class="dropdown-item" href="/pageBMI">TES BMI</a></li>
      </ul>

    <li class="nav-item">
      <a class="nav-link" href="/artikel">ARTIKEL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/cariDokter">CARI DOKTER</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#footer">CONTACT ME</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="/aboutMe">ABOUT ME </a>
    </li>
    <li class="nav-itemm ">
      <a class="nav-link" href="page/loginpage.php"><span>LOGIN</span> </a>
    </li>
    <form class="d-flex " role="search">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success ms-1" type="submit"><img src="asset/img/search.svg" alt="search" height="40"
          width="40"></button>
    </form>
  </div> --}}

  @include('partials.navbar')
  <main>
    {{-- shadow dom --}}
    @yield('container')

  </main>

  <!-- footer -->
  <footer>
    <div class="container footer-1" id="footer">
      <div class="row">
        <div class="col-md-4 pt-3 text-center">
          <h3 class="pb-3">Tentang Kami</h3>
          <p class="tentang-kami">SO (Sejahtera Online) adalah website yang bertujuan untuk memberikan
            banyak
            informasi tentang kesehatan yang dibutuhkan oleh seluruh masyarakat di Indonesia dan informasi yang kami
            sajikan juga mudah untuk di pahami oleh orang awam.</p>
        </div>
        <div class="col-md-2 pt-lg-3 pt-5 text-center ">
          <h3 class="pb-3">Contact me</h3>
          <p class="contact">Gedung SO, Jl. jembatan biru No.10, Bogor Pusat 15670</p>
          <p class="contact pb-2"><span class="fw-bolder">Phone</span>: 085894440647 <span><span
                class="fw-bolder">Email</span>: Sejahtera-online@gmail.com</span>
          </p>
          <a class="sosmed" href="/"><img src="asset/img/twitter.png" class="img-fluid" alt="twitter"></a>
          <a class="sosmed" href="/"><img src="asset/img/instagram.png" class="img-fluid" alt="instagram"></a>
          <a class="sosmed" href="/"><img src="asset/img/facebook.png" class="img-fluid" alt="facebook"></a>
        </div>
        <div class="col-md-3 pt-lg-3 pt-5 text-center ">
          <h3 class="pb-3">Credit By</h3>
          <p class="credit">halodoc.com</p>
          <p class="credit">consula.com</p>
          <p class="credit">tentanganak.id</p>
        </div>
        <div class="col-md-3 pt-lg-3 pt-5 text-center">
          <h3 class="pb-3">Didukung Oleh</h3>
          <img src="asset/img/dicoding.png" alt="logo dicoding" class="Didukung">
          <img src="asset/img/Kampus Merdeka.png" alt="logo dicoding" class="Didukung">
        </div>
      </div>
    </div>
    <div class="shadow-content footer-2">
      <div class="container">
        <div class="row footer2">
          <div class="col-md-4 text-center ">
            <img src="asset/img/logo.jpg" alt="Logo" width="60" height="60">
            <span class="SO">Sejahtera Online</span>
          </div>
          <div class="col-md-5 pt-2 ">
            <p class="lead text-center">Mari Hidup Sehat Bersama Kami </p>
          </div>
          <div class="col-md-3 pt-2 text-center ">
            <a class="sosmed" href=""><img src="asset/img/twitter.png" class="img-fluid" alt="twitter"></a>
            <a class="sosmed" href=""><img src="asset/img/instagram.png" class="img-fluid" alt="instagram"></a>
            <a class="sosmed" href=""><img src="asset/img/facebook.png" class="img-fluid" alt="facebook"></a>
          </div>
          <div class="backTop">
            <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="asset/img/backtoup.svg" alt=""></button>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright text-center">
      ©2023 Sejahtera Online
    </div>

  </footer>
</body>

<script src="asset/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>