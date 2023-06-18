@extends('layouts/main')

@section('container')
    <!--hero-->
    <div class="container px-1 py-5 ">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-12 col-sm-8 col-lg-6 ">
                <img src="asset/img/heros-element.png" class="img-fluid " alt="icon" width="800" height="900" loading="lazy">
            </div>
            <div class="col-lg-6 ">
                <h1 class="fw-bold mb-3 ">Sejahtera Online</h1>
                <p class="lead fs-4 ">SO (Sejahtera Online) adalah website yang bertujuan untuk memberikan banyak informasi
                    tentang kesehatan yang dibutuhkan oleh seluruh masyarakat di Indonesia dan informasi yang kami sajikan
                    juga mudah untuk di pahami oleh orang awam.
                    Nantinya terdapat juga fitur-fitur yang dapat dimanfaatkan oleh pengguna untuk terus dapat menjaga
                    kesehatannya, Kami memilih tema ini karena masih banyak masyarakat yang kurang peduli dan teredukasi
                    dalam menjaga kesehatannya.</p>
            </div>
        </div>
    </div>
    <!--feture 1-->
    <div class="row m-2">
        <h1>LAYANAN KESEHATAN</h1>
        <div class="col-md-3">
            <div class="row g-0 border rounded  mb-5 shadow-sm  align-items-center text-center justify-content-center position-relative "
                id="featured-4">
                <div class="col-12 d-none d-lg-block">
                    <img class="bd-placeholder-img  "width="200" height="200" img src="asset/img/imb.jpg"
                        role="img">
                </div>
                <div class="col p-4  flex-column position-relative">
                    <h3 class="mb-0">Test Body Mass Index</h3>
                    <p class="card-text text-justify mb-auto">Body Mass Index (BMI) adalah angka yang menjadi penilaian
                        standar untuk menentukan apakah berat badan Anda tergolong normal, kurang, berlebih, atau obesitas.
                    </p>
                    <a href="pageBMI" class="btn btn-primary my-3"> Coba Test</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row g-0 border rounded justify-content-center text-center shadow-sm h-md-200 position-relative">
                <div class="col-12 d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="200" img src="asset/img/mental.webp"
                        role="img">
                </div>
                <div class="col p-4 flex-column position-relative">
                    <h3 class="mb-0">Test Kesehatan Mental</h3>
                    <p class="mb-auto">Tes kesehatan mental adalah suatu pengujian yang dilakukan untuk menguji fungsi
                        pengetahuan atau kognitif seseorang. </p>
                    <a href="pageLansia" class="btn btn-primary my-3"> Coba Test</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div
                class="row g-0 border rounded justify-content-center text-center align-items-center shadow-sm h-md-200 position-relative">
                <div class="col-12 d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="200" img src="asset/img/lansia.jpg"
                        role="img">
                </div>
                <div class="col p-4 flex-column position-relative">
                    <h3 class="mb-0">Test Kerentanan Lansia</h3>
                    <p class="mb-auto">Test Frailty merupakan sekumpulan kondisi yang membuat lansia menjadi amat rentan dan
                        rapub terhadap berbagai ancaman kesehatan maupun psikis, seperti mudah jatuh, mudah stres, dan mudah
                        sakit.</p>
                    <a href="pageMental" class="btn btn-primary my-3"> Coba Test</a>
                </div>
            </div>
        </div>
    </div>
    <!--fitur 2-->

    <div data-aos="zoom-down-out">
        <div class="b-example-divider"></div>
        <div class="blog m-2">
            <h1>ARTIKEL KESEHATAN</h1>
            <div class="container my-5">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                        <img class="rounded-lg-3" src="asset/img/lansia.jpg" alt="" width="720">
                    </div>
                    <div class="col-lg-6 p-3 p-lg-5 pt-lg-3">
                        <h2 class="display-4 ">Dampak Self-Diagnose terhadap Kesehatan Mental</h2>
                        <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam esse atque
                            aliquid velit
                            laudantium itaque beatae id. Sed et, esse minus, odio ipsa ratione veritatis facere nam
                            recusandae fuga
                            aut.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                            <a href="#" class="btn btn-info btn-lg px-4 me-md-2 fw-bold ms-1">More</a>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-lg-4">
                            <img class=" rounded" img src="asset/img/anaksekolah.jpg" alt="anaksekolah" width="100px"
                                height="100px">
                            <h3>Memastikan Kesehatan Anak di Sekolah Semasa Pandemi</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, distinctio.</p>
                            <p><a class="btn btn-info" href="#">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <img class="bd-placeholder-img rounded" width="100%" height="200" img
                                src="asset/img/vaksin.jpg" role="img">

                            <h3>Vaksin vs Serum, Mana Lebih Efektif?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, ad?.</p>
                            <p><a class="btn btn-info" href="#">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->

                        <div class="col-lg-4">
                            <img class="bd-placeholder-img rounded" width="100%" height="200" img
                                src="asset/img/posyandu.webp">
                            <h3>Sudah Lengkapkah Imunisasi Sang Buah Hati?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, qui.</p>
                            <p><a class="btn btn-info" href="#">View details &raquo;</a></p>

                        </div><!-- /.col-lg-4 -->
                        <div class="lainnya ">
                            <a class="btn btn-secondary" href="artikel">ARTIKEL LAINNYA &raquo;</a>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>
        </div>
    </div>

    </main>
@endsection
