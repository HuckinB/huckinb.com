<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Brandon Huckin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-notify/bootstrap-notify.js') }}"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/latest/css/pro.min.css" media="all">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/latest/css/pro-v4-font-face.min.css" media="all">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/latest/css/pro-v4-shims.min.css" media="all">
</head>

<body>
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{ asset('img/Brandon_Huckin.jpg') }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="{{ route('welcome') }}">Brandon Huckin</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="https://twitter.com/OfficialHuckinB" target="_blank"><i class="fab fa-twitter fa-fw"></i></a>
                <a href="https://www.facebook.com/HuckinB" target="_blank"><i class="fab fa-facebook fa-fw"></i></a>
                <a href="https://www.instagram.com/HuckinB" target="_blank"><i class="fab fa-instagram fa-fw"></i></a>
                <a href="https://www.snapchat.com/add/HuckinB" target="_blank"><i class="fab fa-snapchat fa-fw"></i></a>
                <a href="https://www.github.com/HuckinB" target="_blank"><i class="fab fa-github fa-fw"></i></a>
            </div>
        </div>
        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="#home"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>CV</span></a></li>
                <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>
                <li><a href="{{ route('metar') }}"><i class="bx bx-plane"></i> Metar</a></li>
            </ul>
        </nav>
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    </div>
</header>

@include('layouts.alerts')
<main id="main" class="bg-dark vh-100 text-white">
    <section class="about mx-5">
        <div class="row">
            <div class="col-8">
                <h1>Let's get some METAR!</h1>

                <div class="form-group">
                    <label for="icao">Departure ICAO</label>
                    <input type="text" class="form-control" id="icao" name="icao" placeholder="Enter ICAO">
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-secondary">
                    <div class="card-body">
                        Airport: <span id="airport"></span><br>
                        Wind: <span id="wind"></span><br>
                        Visibility: <span id="visibility"></span><br>

                        Temperature: <span id="temperature"></span><br>
                        Dew Point: <span id="dewpoint"></span><br>
                        QNH: <span id="qnh"></span><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{{ date("Y") }}</span></strong>
        </div>
        <div class="credits">
            Developed by <a href="https://huckinb.com/">Brandon</a>
        </div>
    </div>
    <hr class="bg-white">
    <div class="credits">
        @auth
            <a href="{{ Auth::logout() }}">Logout</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
</footer>

<script>
    $(document).ready(function () {
        $('#icao').on('keyup', function () {
            var icao = $(this).val();
            if (icao.length === 4) {
                $.ajax({
                    url: "https://api.checkwx.com/metar/" + icao.toUpperCase() + "/decoded",
                    headers: {
                        'X-API-Key': "6884995479ca443a9fba3ca978"
                    },
                    type: "GET",
                    success: function (data) {
                        $('#airport').html(data.data[0].station.name);
                        $('#wind').html(data.data[0].wind.degrees + " @ " + data.data[0].wind.speed_kts + "kts");
                        $('#visibility').html(data.data[0].visibility.meters + "m");
                        data.data[0].clouds.forEach(function (cloud) {
                            $('#clouds').append(cloud.text + "<br>");
                        });

                        $('#temperature').html(data.data[0].temperature.celsius + "°C");
                        $('#dewpoint').html(data.data[0].dewpoint.celsius + "°C");
                        $('#qnh').html(data.data[0].barometer.hpa + "hPa");
                    }
                });
            }
        });
    });
</script>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
