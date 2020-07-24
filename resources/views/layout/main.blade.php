<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
        body{
            background: #222831;
            /* font-family: '';  */
        }
        .konten{
          padding: 10px 50px 10px 50px;
          color: white;
          /* padding-left: 50px;
          padding-right: 50px; */
        }
        .kontenTeks{
          padding: 25px;
          border-bottom: 5px solid #1b262c;
          border-right: 5px solid #1b262c;
          border-left: 5px solid #1b262c;
        }
        .jumbotron{
          width: 100%;
          background: #393e46;
          color: #a3f7bf;
          border: 5px solid #1b262c;
        }
        .jumbotron .container{
          border: 5px solid #1b262c;
          margin-left: 15%;
          padding-left: 5%;
          width: 80%;
          border-radius: 10px;
        }
        .pp{
            width: 225px;
            height: 225px;
            border: 5px solid #1b262c;
            border-radius: 50%;
            position: absolute;
            top: 55px;
            left: 5.5%;
        }
        .navbar{
          border: 5px solid #1b262c;
        }
        .card{
            margin-bottom: 30px;
        }
    </style>

    <title>weBAKA</title>
  </head>
  <body>

<div class="konten">
  <div class="jumbotron jumbotron-fluid">
    <div class="forGambar">
      <img class="pp" src="{{ $pp ?? '' }}" alt="foto profil saya">
    </div>
    <div class="container">
      <h1 class="display-4">weBAKA</h1>
      <p class="lead">Halaman @yield('title') website Bayu Kartiko XII RPL 2</p>
    </div>
  </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
      <!-- <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                  @yield('navbar-link')
              </div>
          </div>
        </div>
    </nav>

    <div class="kontenTeks">
        @yield('konten')
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/58da37be9c.js" crossorigin="anonymous"></script>
  </body>
</html>
