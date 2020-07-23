<!-- halaman layout tampilan -->
@extends('layout/main')

<!-- cari section yang "@yield('namanya apa', 'isinya') -->
@section('title', 'Experience')

@section('konten')
    <p class="text-center">
    <button class="btn btn-primary" data-toggle="collapse" href="#frontend" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"> Front End <i class="fas fa-palette"></i> </button>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#backend" aria-expanded="false" aria-controls="multiCollapseExample2"> <i class="fas fa-cogs"></i> Back End </button>
    <!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button> -->
    </p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="frontend">
                <div class="card card-body bg-dark text-white">
                    <ul>
                        <li>
                            <i class="fab fa-html5"></i> HTML :
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 97%;" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100">97%</div>
                            </div>
                        </li>
                        <br>
                        <li>
                            <i class="fab fa-css3-alt"></i> CSS :
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 86%;" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">86%</div>
                            </div>
                        </li>
                        <br>
                        <li>
                            <i class="fab fa-js-square"></i> Javascript :
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">78%</div>
                            </div>
                        </li>
                        <br>
                        <li>
                            <i class="fab fa-git-alt"></i> Version Control System (Git) :
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">5%</div>
                            </div>
                        </li>
                        <br>
                        <li>
                            <i class="fas fa-ruler-combined"></i> Responsive & Mobile design :
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 23%;" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100">23%</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="collapse multi-collapse" id="backend">
                <div class="card card-body bg-dark text-white">
                <ul>
                        <li>
                            <i class="fab fa-php"></i> PHP :
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 63%;" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">63%</div>
                            </div>
                        </li>
                        <br>
                        <li>
                            <i class="fab fa-python"></i> Python :
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">33%</div>
                            </div>
                        </li>
                        <br>
                        <li>
                            <i class="fas fa-database"></i> Database MYSQL :
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection;

@section('navbar-link')
  <a class="nav-item nav-link" href="{{ url('/home') }}">Home</a>
  <a class="nav-item nav-link" href="{{ url('/profile') }}">Profile</a>
  <a class="nav-item nav-link disabled" href="{{ url('/exp') }}">Experience</a>
  <a class="nav-item nav-link" href="{{ url('/portofolio') }}">Portofolio</a>
@endsection;