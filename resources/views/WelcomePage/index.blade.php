<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IICT SEMINAR LIBRARY</title>
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- Bootstrap Core CSS -->
    <link href="WelcomePage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- {{Html::style('WelcomePage/vendor/bootstrap/css/bootstrap.min.css')}}     -->

    <!-- Custom Fonts -->
    <link href="WelcomePage/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="WelcomePage/css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">IICT Seminar Library</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    {{-- <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li> --}}
                    <li>
                        <a class="page-scroll" href="#team">About Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/search">Search</a>
                    </li>

                    {{-- <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li> --}}
                    @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            {{-- <li><a href="{{ url('/register') }}">Register</a></li> --}}
                        @else
                            @if(Auth::user()->user_type!='normal')

                                <li>
                                    <a href="{{ url('/home') }}">
                                        Home
                                    </a>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Root Access <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="button" style="color:blue;">

                                    <li>
                                        <a style="color:blue;" href="/lendbook">Lend Book</a>
                                    </li>
                                    <li>
                                        <a style="color:blue;" href="/recievebook">Receive Book</a>
                                    </li>
                                    <li>
                                        <a style="color:blue;" href="/status">Check User Status</a>
                                    </li>
                                    <li>
                                        <a style="color:blue;" href="/addbook">Add Book</a>
                                    </li>
                                    <li>
                                        <a style="color:blue;" href="/expired">Expired</a>
                                    </li>
                                    <li>
                                        <a style="color:blue;" href="/loanhistory">Loan History</a>
                                    </li>
                                    <li>
                                        <a style="color:blue;" href="/registeruser">Register</a>
                                    </li>



                                </ul>

                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a style="color:blue;" href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>

                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                         <li>
                                            <a href="{{ url('/mystatus') }}">
                                                My Status
                                            </a>
                                        </li>
                                        <li>
                                            <a style="color:blue;" href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                            
                            
                        @endif


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"> <font color="purple"> Welcome To IICT Seminar Library! </font> </div>
                <div class="intro-heading" style="color:black;" >পুস্তক</div>
                <a href="/search" class="page-scroll btn btn-xl">Search</a>
            </div>
        </div>
    </header>


       
    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container" align="center">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Team: Day Dreamer</h2>
                    <h3 class="section-subheading text-muted">Database Lab Project</h3>
                </div>
            </div>
            <div class="row" align="center">
                <div class="col-sm-2 col-sm-offset-3">
                    <div class="team-member">
                        <img src="WelcomePage/img/team/farhad.jpg" class="img-responsive img-circle" alt="">
                        <h4>Rafik Farhad</h4>
                        <p class="text-muted">Lead Developer/Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://fb.com/rafikfarhad"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2 col-sm-offset-2">
                    <div class="team-member">
                        <img src="WelcomePage/img/team/alif.jpg" class="img-responsive img-circle" alt="">
                        <h4>Alif Al Amin</h4>
                        <p class="text-muted">Lead Developer/Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://fb.com/alifalamin1"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Students of Shahjalal University of Science and Technology.</p>
                </div>
            </div>
        </div>
    </section>

    {{--     <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; SUST CSE 13</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        
                        <li><i class="fa fa-spinner"></i> SUST CSE
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                    
                        <li><a href="http://library.sust.edu">Central Library</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="WelcomePage/vendor/jquery/jquery.min.js"></script>
    

    <!-- Bootstrap Core JavaScript -->
    <script src="WelcomePage/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="WelcomePage/https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="WelcomePage/js/jqBootstrapValidation.js"></script>
    <script src="WelcomePage/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="WelcomePage/js/agency.min.js"></script>

</body>

</html>
