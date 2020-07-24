<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAKA 404 Not Found</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@515&display=swap');
        body{
            margin: 0;
            padding: 0;
            background-image: url({{url('assets/photos/darkwood.jpg')}});
            /* background-size: cover; */
            font-family: 'Quicksand', sans-serif;
            /* background: #222831; */
        }
        .neon{
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%,-50%);
            margin: 0;
            padding: 0 20px;
            font-size: 6em;
            color: #fff;
            text-shadow: 0 0 20px #ff005b;
        }
        .neon::after{
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            padding: 0 20px;
            z-index: -1;
            color: #ff005b;
            filter: blur(15px);
        }
        .neon::before{
           content: "";
           position: absolute;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           /* background: #fe3a80;
           z-index: -2;
           opacity: .5;
           filter: blur(40px); */
        }

        .kedip0{
            animation: animate 1s infinite linear;
        }
        @keyframes animate{
            0%{
                color: #484848;
                text-shadow: none;
            }
            18%{
                color: #484848;
                text-shadow: none;
            }
            20%{
                color: #fff;
                text-shadow: 0 0 7px #fff, 0 0 20px #484848;
            }
            30%{
                color: #484848;
                text-shadow: none;
            }
            35%{
                color: #fff;
                text-shadow: 0 0 7px #fff, 0 0 20px #484848;
            }
            70%{
                color: #484848;
                text-shadow: none;
            }
            85%{
                color: #fff;
                text-shadow: 0 0 7px #fff, 0 0 20px #484848;
            }
            90%{
                color: #484848;
                text-shadow: none;
            }
            100%{
                color: #484848;
                text-shadow: none;
            }
        }

        /* neon2 */
        .neon2{
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%,-50%);
            margin: 0;
            padding: 0 20px;
            font-size: 2.5em;
            color: #fff;
            text-shadow: 0 0 20px #ff005b;
        }
        .neon2::after{
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            padding: 0 20px;
            z-index: -1;
            color: #ff005b;
            filter: blur(15px);
        }
        .neon2::before{
           content: "";
           position: absolute;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           background: #fe3a80;
           z-index: -2;
           opacity: .5;
           filter: blur(40px);
        }
    </style>

</head>
<body>
    <h1 class="neon text-center" data-text="404">
        4<span class="kedip0">0</span>4
    </h1>
    <h5 class="neon2" data-text="[ Halaman Tidak Ditemukan ]">
        [ Halaman Tidak Ditemukan ]
    </h5>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/58da37be9c.js" crossorigin="anonymous"></script>

</body>
</html>
