<!-- halaman layout tampilan -->
@extends('layout/main')

<!-- cari section yang "@yield('namanya apa', 'isinya') -->
@section('title', 'Profil')

@section('konten')
  <h4>Perkenalkan.. </h4>
  <p>
    nama saya <b>Bayu Kartiko</b>.. dari kelas <b>XII RPL 2</b>, <b>SMK Taruna Bhakti Depok</b>. <br>
    saya lahir di kota <u>Depok, Jawa Barat</u> pada tanggal <u>04 Mei 2003</u> <br>
    yang saat ini berDomisili di kota <u>kp.babakan pekapuran, Depok, Jawa Barat</u> <br><br>
    saya adalah seorang siswa yang mendalami passion <u>Frond End</u> & <u>Back End</u>. <br>
    karena saya suka <u>Frond End</u> dan <u>Back End</u>.. maka saya mendalami beberapa bahasa program yang bisa anda kunjungi di menu <b><u>Experience</u></b> diatas. <br><br><br>
    sekian..
  </p>
@endsection;

@section('navbar-link')
  <a class="nav-item nav-link" href="{{ url('/home') }}">Home</a>
  <a class="nav-item nav-link disabled" href="{{ url('/profile') }}">Profile</a>
  <a class="nav-item nav-link" href="{{ url('/exp') }}">Experience</a>
  <a class="nav-item nav-link" href="{{ url('/portofolio') }}">Portofolio</a>
@endsection;