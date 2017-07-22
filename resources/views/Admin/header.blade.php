<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>IICT Seminar Library</title>

    <!-- Bootstrap CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="admin/css/elegant-icons-style.css" rel="stylesheet"/>
    <link href="admin/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- full calendar css-->
    <link href="admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet"/>
    <link href="admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet"/>
    <!-- easy pie chart-->
    <link href="admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"
          media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="admin/css/owl.carousel.css" type="text/css">
    <link href="admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="admin/css/fullcalendar.css">
    <link href="admin/css/widgets.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <link href="admin/css/style-responsive.css" rel="stylesheet"/>
    <link href="admin/css/xcharts.min.css" rel=" stylesheet">
    <link href="admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                        class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="/" class="logo">IICT<span class="lite">Seminar</span>Library</a>
        <!--logo end-->

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <a href="{{url('/')}}/search">Search</a>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="username"> {{Auth::user()->name}}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li>
                            <a href="{{ url('/logout') }}"
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
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="{{url('/')}}/home">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @if(Auth::user()->user_type=='admin')
                    <li>
                        <a class="" href="{{ url('/addbook') }}"><i class="icon_document_alt"></i>Add Book</a>
                    </li>
                    <li>
                        <a class="" href="{{ url('/lendbook') }}"><i class="icon_document_alt"></i>Lend Book</a>
                    </li>
                    <li>
                        <a  href="{{ url('/recievebook') }}"><i class="icon_document_alt"></i>Receive Book</a>
                    </li>
                    <li>
                        <a  href="{{ url('/status') }}"><i class="icon_document_alt"></i>Check User Status</a>
                    </li>
                    <li>
                        <a class="myButton" href="/expired"><i class="icon_document_alt"></i>Expired Loans</a>
                    </li>
                    <li>
                        <a class="myButton" href="/loanhistory"><i class="icon_document_alt"></i>Loan History</a>
                    </li>
                    <li>
                        <a class="myButton" href="/registeruser"><i class="icon_document_alt"></i>Register</a>
                    </li>
                @else

                    <li>
                        <a class="myButton" href="/mystatus"><i class="icon_document_alt"></i>My Status</a>
                    </li>
                @endif

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
    <div style="padding-top: 50px;">
        @yield('content')
    </div>


    </section>
    <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="admin/js/jquery.js"></script>
<script src="admin/js/jquery-ui-1.10.4.min.js"></script>
<script src="admin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="admin/js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="admin/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="admin/js/jquery.scrollTo.min.js"></script>
<script src="admin/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="admin/assets/jquery-knob/js/jquery.knob.js"></script>
<script src="admin/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="admin/js/owl.carousel.js"></script>
<!-- jQuery full calendar -->
<script src="admin/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="admin/js/calendar-custom.js"></script>
<script src="admin/js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="admin/js/jquery.customSelect.min.js"></script>
<script src="admin/assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="admin/js/scripts.js"></script>
<!-- custom script for this page-->
<script src="admin/js/sparkline-chart.js"></script>
<script src="admin/js/easy-pie-chart.js"></script>
<script src="admin/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="admin/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="admin/js/xcharts.min.js"></script>
<script src="admin/js/jquery.autosize.min.js"></script>
<script src="admin/js/jquery.placeholder.min.js"></script>
<script src="admin/js/gdp-data.js"></script>
<script src="admin/js/morris.min.js"></script>
<script src="admin/js/sparklines.js"></script>
<script src="admin/js/charts.js"></script>
<script src="admin/js/jquery.slimscroll.min.js"></script>
<script>

    //knob
    $(function () {
        $(".knob").knob({
            'draw': function () {
                $(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel
    $(document).ready(function () {
        $("#owl-slider").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true

        });
    });

    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    $(function () {
        $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#000', '#000'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function (e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    });

</script>

</body>
</html>
