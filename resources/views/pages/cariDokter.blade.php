@extends('layouts/main')

@section('container')

    <!--hero-->
    <!-- <div id="carouselExampleCaptions" class="carousel" data-bs-ride="false"> -->
    <div class="carousel-inner">
        <img src="asset/img/cari-docter.png" class="d-block w-100 cari-docter" alt="...">
        <div class="carousel-item active">
            <div class="carousel-caption d-none d-md-block">
                <h5>Mari Hidup Sehat Bersama Kami </h5>
                <p>"Jangan menunggu sakit, Budayakan hidup sehat untuk mencegah segala penyakit."</p>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <!--feture 1-->
      
    <!-- Kategori -->
    <div class="container kategori text-center">
        <h1>Pilih berdasarkan</h1>
        <a class="btn btn-success" href="kategoridokter.php?spesailis=UMUM" role="">DOKTER UMUM</a>
        <a class="btn btn-success" href="kategoridokter.php?spesailis=DOKTER GIGI" role="button">DOKTER GIGI</a>
        <a class="btn btn-success" href="kategoridokter.php?spesailis=DOKTER KANDUNGAN" role="button">DOKTER KANDUNGAN</a>
        <a class="btn btn-success" href="kategoridokter.php?spesailis=DOKTER ANAK" role="button">DOKTER ANAK</a>
        <a class="btn btn-success" href="kategoridokter.php?spesailis=DOKTER BAYI" role="button">DOKTER BAYI</a>
        <a class="btn btn-success" href="kategoridokter.php?spesailis=DOKTER LANSIA" role="button">DOKTER LANSIA</a>
        <a class="btn btn-success" href="kategoridokter.php?spesailis=DOKTER LAINNYA" role="button">DOKTER LAINNYA</a>
    </div>

    <!-- Kategori -->

    <div class="katagori-dokter">
        <div class="row col-12">
          <h1>ALL DOKTER</h1>
        {{-- penyambungan ke database --}}

        
        
        </div>
    </div>
@endsection