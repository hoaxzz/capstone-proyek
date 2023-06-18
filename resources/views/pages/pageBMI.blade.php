@extends('layouts/main')

@section('container')
<div class="container mt-5">
    <div class="row">
      <div class="col">
        <h2>Kalkulator BMI</h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p><b>Body Mass Index (BMI)</b> atau <b>Indeks Massa Tubuh (IMT)</b> adalah angka yang menjadi penilaian standar untuk menentukan apakah berat badan Anda tergolong <b>normal</b>, <b>kurang</b>, <b>berlebih</b>, atau <b>obesitas</b>.</p>
      </div>
    </div>
    <div class="row justify-content-center text-center">
      <div class="col-sm-3 mb-3">
        <div class="card bg-info">
          <div class="card-body">
            <h1 class="card-title"><18.5</h1>
            <p class="card-text text-center">Underweight</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-3 text-center">
        <div class="card bg-success">
          <div class="card-body">
            <h1 class="card-title">18.5 - 25.0</h1>
            <p class="card-text text-center">Normal</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-3 text-center">
        <div class="card bg-warning">
          <div class="card-body">
            <h1 class="card-title">25.1 - 27.0</h1>
            <p class="card-text text-center">Overweight</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-3 text-center">
        <div class="card bg-danger">
          <div class="card-body">
            <h1 class="card-title">>27</h1>
            <p class="card-text text-center">Obesitas</p>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row mt-3">
      <div class="col-md-4 mb-3">
        <form id="bmiForm" name="bmiForm" onsubmit="return false">
          <div class="mb-3">
            <label for="jenis-kelamin" class="form-label">Masukkan Jenis Kelamin :</label>
            <select class="form-select" id="jenis-kelamin">
              <option selected>Pilih jenis kelamin</option>
              <option value="pria">Pria</option>
              <option value="wanita">Wanita</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="tinggi-badan" class="form-label">Masukkan Tinggi badan(Cm) :</label>
            <input type="text" class="form-control" id="tinggi-badan" placeholder="Example : 175">
          </div>
          <div class="mb-3">
            <label for="tinggi-badan" class="form-label">Masukkan Berat badan(Kg) :</label>
            <input type="number" class="form-control" id="berat-badan" placeholder="Example : 75">
          </div>
          <input type="submit" value="Hitung" class="btn btn-secondary" onclick="bmi();">
        </form>
      </div>
      <div class="col">
        <div class="row">
          <div id="tbbb" class="col">

          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-md-4">
            <div id="display-content-bmi" class="mb-4 text-center">
              
            </div>
          </div>
          <div id="display-content-bbi-none" class="col-md-4">
            <div id="display-content-bbi" class="mb-4 text-center">
              
            </div>
          </div>
        </div>
        <div id="display-content-aboutBmi" class="row">
          
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      
    </div>
  </div>

@endsection