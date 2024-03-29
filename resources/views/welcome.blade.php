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
<section id="home" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1>Brandon Huckin</h1>
        <p><span class="typed" data-typed-items="Discord.JS, Laravel, PHP, SQL, Gamer, Developer"></span></p>
    </div>
</section>
<main id="main">
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>About</h2>
                <p>My names Brandon, I'm {{ \Carbon\Carbon::createFromDate(2002, 02, 19)->diffInYears() }} and a Full-Stack Laravel Developer for
                    <a href="https://simulatorhits.com" target="_blank">SimulatorHits</a>. SimulatorHits is a NPO Internet Radio Station
                    with a heart for the Community.
                    <br>
                    As well as a Web Developer I also have a large knowledge of <a href="https://discordjs.org">Discord.JS</a>, making Bots for Clients.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-3" data-aos="fade-right">
                    <img src="{{ asset('img/Brandon_Huckin.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-9 pt-4 pt-lg-0 content align-self-center" data-aos="fade-left">
                    <h3>Laravel Full-Stack Web Developer.</h3>
                    <div class="row">
                        <div class="col-lg-auto">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 19 Feb 2002</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.huckinb.com</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> <a href="tel:07749733594">07749733594</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-auto">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{ \Carbon\Carbon::createFromDate(2002, 02, 19)->diffInYears() }}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> <a href="mailto:brandon@huckinb.com">brandon@huckinb.com</a></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Location:</strong> Oxford, United Kingdom</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="resume" class="resume">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Education</h3>
	                <div class="resume-item">
		                <h4>Level 2 Diploma in Motor Vehicle</h4>
		                <h5>2015 - 2017</h5>
		                <p><em>Banbury &amp; Bicester College</em></p>
		                <p>
			                First Year learning the basics of how to maintain a vehicle and carry out maintenance.
			                <br>
			                Second Two years developing the skills I had previously learnt, gaining knowledge and experience focusing on Vehicle Electrical Systems such as ADAS and the concept of LIDAR.
		                </p>
	                </div>
                    <h3 class="resume-title">Career</h3>
	                <div class="resume-item">
		                <h4>Crew Member</h4>
		                <h5>2020 - 2022</h5>
		                <p><em>McDonalds</em></p>
		                <ul>
                            <li>Working in the kitchen preparing food.</li>
                            <li>Serving orders at the Drive Thru and Front Counter.</li>
                            <li>Taking orders and payments at the Drive Thru and Front Counter.</li>
                            <li>Closing the store, ensuring all machinery is turned off and cleaned.</li>
                        </ul>
	                </div>
	                <div class="resume-item">
		                <h4>Experienced Team Member</h4>
		                <h5>2022 - Present</h5>
		                <p><em>TheLight Cinema</em></p>
		                <ul>
                            <li>Ensuring the upkeep of our Bowling Lanes and completing maintainence tasks.</li>
                            <li>Supporting the Kitchen during busy periods as well as waiting for tables.</li>
                            <li>Ensuring the safety of customers while they use our Climing Wall and as well as perform Rescues where necessary.</li>
                        </ul>
	                </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Professional Experience</h3>
                    <div class="resume-item">
                        <h4>General Manager / Web Developer</h4>
                        <h5>2018 - Present</h5>
                        <p><em><a href="https://rtlvtc.dev" target="_blank">Relaxed Truckers</a></em></p>
                        <ul>
                            <li>Manage our community members and ensure all our rules are being followed.</li>
                            <li>Developing the website as well as designing and making a Staff Panel for our Members.</li>
                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Head / Full Stack Developer</h4>
                        <h5>2019 - Present</h5>
                        <p><em><a href="https://simulatorhits.com" target="_blank">SimulatorHits.com</a></em></p>
                        <ul>
                            <li>Leading the Development Team, ensuring tasks are complete to a high standard and on time.</li>
                            <li>Managing the Staff Team, assisting Presenters with there Shows as well as handling Support Tickets.</li>
                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Developer</h4>
	                    <h5>2020 - 2022</h5>
                        <p><em><a href="https://truckspace.group/" target="_blank">Truckspace Group</a></em></p>
                        <ul>
                            <li>Creating a Discord Bot that can be used in both TruckSpace Guilds as well as public guilds.</li>
                            <li>Completing tasks given on our Project Management Panel.</li>
                            <li>Create Bug Reports as well as suggest new features to the team.</li>
                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Support / Developer</h4>
	                    <h5>2023 - Present</h5>
                        <p><em><a href="https://tracksim.app/" target="_blank">TrackSim</a></em></p>
                        <ul>
                            <li>Handling Support Tickets resolving issues and bug reports.</li>
                            <li>Focussing on smaller tasks to allow the Dev Team to focus on bigger tasks.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Testimonials | Reviews</h2>
                <p>Here is some reviews from previous and current clients and friends.</p>
            </div>
            <h3>Coming Soon</h3>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact</h2>
                <p>Want to enquire or ask a question? Reach out to me via any of the methods below or fill in the contact form and I will get back to you as soon as I can!</p>
            </div>
            <div class="row align-self-center" data-aos="fade-in">
                <div class="col-lg-5 align-items-stretch">
                    <div class="info">
                        <div class="email">
                            <i class="fad fa-envelope fa-fw"></i>
                            <h4>Email:</h4>
                            <p><a href="mailto:brandon@huckinb.com">brandon@huckinb.com</a></p>
                        </div>
                        <div class="phone">
                            <i class="fad fa-phone fa-fw"></i>
                            <h4>Call:</h4>
                            <p><a href="tel:+447749733594">+44 7749 733594</a></p>
                        </div>
                        <div class="discord">
                            <i class="fab fa-discord fa-fw"></i>
                            <h4>Discord:</h4>
                            <p><a href="https://discord.com/users/228575716214702080">HuckinB#0001</a></p>
                        </div>
                     </div>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    {!! Form::open(['route' => ['contact.store'], 'method' => 'POST']) !!}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                {!! Form::label('name', 'Your Name') !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '', 'data-rule' => 'minlen:5', 'data-msg' => 'Please enter at least 4 characters']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('name'))
                                    <p class="help-block">
                                        {{ $errors->first('name') }}
                                    </p>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::label('email', 'Your Email') !!}
                                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '', 'data-rule' => 'email', 'data-msg' => 'Please enter a valid email']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('email'))
                                    <p class="help-block">
                                        {{ $errors->first('email') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('subject', 'Subject') !!}
                            {!! Form::text('subject', old('subject'), ['class' => 'form-control', 'placeholder' => '', 'required' => '', 'data-rule-minlength' => '10', 'data-msg' => 'Please enter at least 10 characters']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('subject'))
                                <p class="help-block">
                                    {{ $errors->first('subject') }}
                                </p>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('content', 'Message') !!}
                            {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'placeholder' => '', 'required' => '', 'rows' => '3', 'data-rule' => 'required', 'data-msg' => 'Please write something for us']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('content'))
                                <p class="help-block">
                                    {{ $errors->first('content') }}
                                </p>
                            @endif
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">
                                Send
                            </button>
                        </div>
                    {!! Form::close() !!}
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

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/typed.js/typed.min.js') }}"></script>
<script src="{{ asset('vendor/aos/aos.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
