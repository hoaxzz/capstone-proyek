@extends('layouts/main')

@section('container')

<main>
    <!--hero-->
    <div class="container px-1 py-5 ">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-12 col-sm-8 col-lg-6 ">
          <img src="asset/img/logo.jpg" class="img-fluid " alt="icon" width="800" height="900" loading="lazy">
        </div>
        <div class="col-lg-6 ">
          <h1 class="fw-bold mb-3 ">Sejahtera Online</h1>
          <p class="lead fs-4 ">SO (Sejahtera Online) adalah website yang bertujuan untuk memberikan banyak informasi tentang kesehatan yang dibutuhkan oleh seluruh masyarakat di Indonesia dan informasi yang kami sajikan juga mudah untuk di pahami oleh orang awam. 
            Nantinya terdapat juga fitur-fitur yang dapat dimanfaatkan oleh pengguna untuk terus dapat menjaga kesehatannya, Kami memilih tema ini karena masih banyak masyarakat yang kurang peduli dan teredukasi dalam menjaga kesehatannya.
        <br><br>
        Aplikasi ini Dibuat salah satu syarat untuk memenuhi kelulusan dari program MSIB X Dicoding. Jika ada kesalahan dalam penyajian konten atau yang lainnya kami segenap tim memohon maaf sebanyak banyaknya.
        </p>
        </div>
      </div>
    </div>
    <!--fitur 2-->
    <div data-aos="fade-up">
      <div class="row m-2">
        <h1>TEAM PROJECT</h1>
        <div class="card my-2 mx-3" style="width: 18rem;">
            <img src="asset/img/PasPhoto.jpg" height="250px" class="card-img-top rounded-2 mt-2" alt="...">
            <div class="card-body">
              <h4 class="card-title">EKA MAHA PUTRA SEMBIRING </h4>
              <p class="card-text">Eka Maha Putra Sembiring adalah mahasiswa dari Universitas Dirgantara Marsekal Suryadarma saat ini sedang mengerjakan Capstone Project MSIB X Dicoding Batch 4 sebagai <strong>UI/UX DESIGNER</strong></p>
              <a href="https://www.linkedin.com/in/eka-maha-putra-sembiring-0789b6277/" class="btn">Detail</a>
            </div>
          </div>
          <div class="card my-2 mx-3" style="width: 18rem;">
            <img src="asset/img/fotoTsaqib.jpg" height="250px" class="card-img-top rounded-2 mt-2" alt="...">
            <div class="card-body">
              <h4 class="card-title">Muhammad Tsaqib </h4>
              <p class="card-text">Muhammad Tsaqib adalah mahasiswa dari Universitas Indo Global Mandiri saat ini sedang mengerjakan Capstone Project MSIB X Dicoding Batch 4 sebagai <strong>WEB DEVELOPMENT</strong></p>
              <a href="https://www.linkedin.com/in/muhammad-tsaqib-616577249/" class="btn">Detail</a>
            </div>
          </div>
          <div class="card my-2 mx-3" style="width: 18rem;">
            <img src="asset/img/profile.png" height="250px" class="card-img-top rounded-2 mt-2" alt="...">
            <div class="card-body">
              <h4 class="card-title">Gabrielle Shierly Oktavianney</h4>
              <p class="card-text">Gabrielle Shierly Oktavianney adalah mahasiswa dari Universitas Pembangunan Nasional Veteran Jawa Timur saat ini sedang mengerjakan Capstone Project MSIB X Dicoding Batch 4 sebagai <strong>WEB DEVELOPMENT</strong></p>
              <a href="#" class="btn">Detail</a>
            </div>
          </div>
          <div class="card my-2 mx-3" style="width: 18rem;">
            <img src="asset/img/fotoAndika.jpg" height="250px" class="card-img-top rounded-2 mt-2" alt="...">
            <div class="card-body">
              <h4 class="card-title">Andika Syahrul Firdan</h4>
              <p class="card-text">Andika Syahrul Firdan adalah mahasiswa Universitas Islam Sultan Agung saat ini sedang mengerjakan Capstone Project MSIB X Dicoding Batch 4 sebagai <strong>WEB DEVELOPMENT</strong></p>
              <a href="#" class="btn">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>


@endsection