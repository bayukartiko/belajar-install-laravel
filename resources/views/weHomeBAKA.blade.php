<!-- halaman layout tampilan -->
@extends('layout/main')

<!-- cari section yang "@yield('namanya apa', 'isinya') -->
@section('title', 'Utama')

@section('konten')
  <h2 class="text-center">
    Selamat datang di weBAKA
  </h2>
  <h6 class="text-center"><u>we</u>bsite <u>BA</u>yu <u>KA</u>rtiko</h6>
  <br><br>
  <p class="text-center">
    Temukan & Hubungi Saya :
    <br><br>
    <button type="button" class="btn btn-light"> <i class="fab fa-instagram"></i> Instagram </button>
    <button type="button" class="btn btn-primary"> <i class="fab fa-facebook-f"></i> Facebook </button>
    <button type="button" class="btn btn-info"> <s><i class="fab fa-twitter"></i> Twitter</s> </button>
    <button type="button" class="btn btn-danger"> <i class="fab fa-youtube"></i> Youtube </button>
    <button type="button" class="btn btn-dark"> <i class="fab fa-github"></i> Github </button>
  </p>
@endsection;

@section('navbar-link')
  <a class="nav-item nav-link disabled" href="{{ url('/home') }}">Home</a>
  <a class="nav-item nav-link" href="{{ url('/profile') }}">Profile</a>
  <a class="nav-item nav-link" href="{{ url('/exp') }}">Experience</a>
  <a class="nav-item nav-link" href="{{ url('/portofolio') }}">Portofolio</a>
@endsection;