<!-- halaman layout tampilan -->
@extends('layout/main')

<!-- cari section yang "@yield('namanya apa', 'isinya') -->
@section('title', 'Portofolio')

@section('konten')
  <div class="kartu text-center">
    <div class="card bg-dark" style="width: 18rem;">
      <img src="{{ $sertipikat ?? '' }}" class="card-img-top" alt="sertifikat">
      <div class="card-body">
        <h5 class="card-title">Sertifikat Dicoding</h5>
        <p class="card-text text-info">Sertifikat kelulusan belajar pemograman untuk pemula di Dicoding</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
@endsection;

@section('navbar-link')
  <a class="nav-item nav-link" href="{{ url('/home') }}">Home</a>
  <a class="nav-item nav-link" href="{{ url('/profile') }}">Profile</a>
  <a class="nav-item nav-link" href="{{ url('/exp') }}">Experience</a>
  <a class="nav-item nav-link disabled" href="{{ url('/portofolio') }}">Portofolio</a>
@endsection;