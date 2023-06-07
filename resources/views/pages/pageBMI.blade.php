@extends('layouts/main')

@section('container')
<div id="particles-js" ></div>
<form name="redirect" class="waktu ">
  <input type="label" name="redirect2" disabled value="">
</form>
<div class="start_btn"><button><p>Mulai Test</p></button></div>
<div class="info_box">
    <div class="info-title"><span>Aturan Test</span></div>
    <div class="info-list">
        <div class="info">
          <li>Kamu harus menjawab<span> 10 pertanyaan</span> yang sudah tersedia</li>
          <li>Jawab semua pertanyaan sebelum waktu habis</li>
          <li>Jika waktu habis maka akan mengulangi pertanyaan awal</li>
         <li>Setelah menjawab semua pertanyaan akan muncul hasil test</li>
        </div>
    </div>
    <div class="buttons">
        <button class="quit">Keluar test</button>
        <button class="restart">Mulai</button>
    </div>
</div>

<div class="quiz_box">
    <header>
        <div class="title">TEST KESEHATAN MENTAL by FHI</div>
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
        <i class="fas fa-brain"></i>
    </div>
    <div class="complete_text text-center">Kamu telah menyelesaikan test kesehatan mental</div><hr>
    <div class="score_text" border border-2>
        
    </div>
    <div class="buttons">
        <button class="restart">Ulangi</button>
        <button class="quit">Keluar</button>
    </div>
</div>
<script src="../asset/script/particles.js"></script>

@endsection