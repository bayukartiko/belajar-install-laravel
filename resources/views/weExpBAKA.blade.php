<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
        body{
            background: #222831;
        }
        .card{
            margin: auto;
            margin-top: 8%;
            width: 75%;
            background: #393e46;
            color: #a3f7bf;
            border: 5px solid #1b262c;
            border-radius: 15px;
        }
        .card-header{
            height: 100px;
        }
        .card-body{
          text-align: left;
        }
        img{
            width: 150px;
            height: 150px;
            border: 5px solid #1b262c;
            border-radius: 50%;
            position: absolute;
            top: -75px;
            left: 42%;
        }
        .navbar{
            background: none;
        }
        .navbar-nav{
            margin: auto;
        }
        .nav-item{
            margin-left: 15px;
        }
        ul li{
            margin-top: 15px;
        }
    </style>

    <title>weBAKA</title>
  </head>
  <body>
    <div class="card text-center">
        <!-- <div class="card-header">
            <div class="text-center"> -->
                <!-- <img src="{{ $image ?? '' }}" alt="foto profil saya"> -->
            <!-- </div>
        </div> -->
        <div class="card-body">
            <p class="text-muted">Experience saya dalam belajar programming</p>
            <p>
              <ul>
                <li>HTML : <br>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </li>
                <li>CSS : <br>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100">83%</div>
                    </div>
                </li>
                <li>Javascript : <br>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </li>
                <li>PHP : <br>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                </li>
                <li>Java : <br>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">78%</div>
                    </div>
                </li>
                <li>Python : <br>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                    </div>
                </li>
              </ul>
            </p>
        </div>
        <div class="card-footer">
            <nav class="navbar navbar-expand-lg">
                <!-- <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="/home">Home</a>
                        <a class="nav-item nav-link" href="/profile">Profile</a>
                        <a class="nav-item nav-link text-muted" href="">Experience</a>
                        <a class="nav-item nav-link" href="/portofolio">Portofolio</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>