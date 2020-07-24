<!-- halaman layout tampilan -->
@extends('layout/main')

<!-- cari section yang "@yield('namanya apa', 'isinya') -->
@section('title', 'Portofolio')

@section('konten')
  {{-- <div class="kartu text-center">
    <div class="card bg-dark" style="width: 18rem;">
      <img src="{{ $sertipikat ?? '' }}" class="card-img-top" alt="sertifikat">
      <div class="card-body">
        <h5 class="card-title">Sertifikat Dicoding</h5>
        <p class="card-text text-info">Sertifikat kelulusan belajar pemograman untuk pemula di Dicoding</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div> --}}
    <div class="row">
        <div class="col-sm-4">
          <div class="card bg-dark text-center">
              <img src="{{ $sertipikat ?? '' }}" class="card-img-top" alt="sertifikat">
              <div class="card-body">
                <h5 class="card-title">Sertifikat Dicoding</h5>
                <p class="card-text text-info">Sertifikat kelulusan belajar pemograman untuk pemula di Dicoding</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card bg-dark text-center">
            <img src="{{ $seminar ?? '' }}" class="card-img-top" alt="seminar">
              <div class="card-body">
                <h5 class="card-title">Seminar</h5>
                <p class="card-text text-info">Acara seminar di Universitas Indonesia</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
        <div class="col-sm-4">
            <div class="card bg-dark text-center">
                <img src="{{ $android ?? '' }}" class="card-img-top" alt="aplikasi belajar mengaji">
                <div class="card-body">
                  <h5 class="card-title">Pembuatan aplikasi belajar mengaji</h5>
                  <p class="card-text text-info">Pembuatan aplikasi belajar mengaji di kelas android</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="card bg-dark text-center">
              <img src="{{ $sada ?? '' }}" class="card-img-top" alt="sertifikat">
              <div class="card-body">
                <h5 class="card-title">Sertifikat Dicoding</h5>
                <p class="card-text text-info">Sertifikat kelulusan belajar pemograman untuk pemula di Dicoding</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
      </div>
@endsection;

@section('navbar-link')
  <a class="nav-item nav-link" href="{{ url('/home') }}">Home</a>
  <a class="nav-item nav-link" href="{{ url('/profile') }}">Profile</a>
  <a class="nav-item nav-link" href="{{ url('/exp') }}">Experience</a>
  <a class="nav-item nav-link disabled" href="{{ url('/portofolio') }}">Portofolio</a>
@endsection;
