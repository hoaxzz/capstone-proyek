@extends('layouts/main')

@section('container')
<link href="asset/css/lansia.css" rel="stylesheet">
<main>
    <!--hero-->
    <!--fitur lansia-->
    <div class="lansia">
    <div class="start_btn"><button><p>Mulai Test</p></button></div>
    <div class="info_box">
        <div class="info-title"><span>Aturan Test</span></div>
        <div class="info-list">
            <div class="info">
              <li>Kamu harus menjawab<span>semua pertanyaan</span> yang sudah tersedia</li>
              <li>Setelah pertanyaan selesai hasil akan muncul</li>
            </div>
        </div>
        <div class="buttons">
            <button class="quit">Keluar test</button>
            <button class="restart">Mulai</button>
        </div>
    </div>

       <div class="quiz_box">
        <header>
            <div class="title">TEST Kerentanan Lansia by SO</div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                
            </div>
            <div class="option_list" id="Answer" onclick="answerclick()">
            </div>
        </section>

        <div class="botomm">
            <div class="total_que">
             
            </div>
            <button class="next_btn">Soal Selanjutnya</button>
            
        </div>
      </div>

    <div class="result_box">
        <div class="icon">
        </div>
        <div class="complete_text text-center">Hasil Test Menyatakan</div><hr>
        <div class="score_text"  border-2>
            
        </div>
          <div class="buttons">
            <button class="restart">Ulangi</button>
            <button class="quit">Keluar</button>
          </div>
        </div>
    </div>
    <script src="asset/js/quislansia.js"></script>
    <script src="asset/js/lansia.js"></script>
  </main>
@endsection