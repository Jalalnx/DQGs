<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    <title>DQGs</title>
    <meta charset="utf-8">
    <title>Solartec - Renewable Energy Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/userStyles.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
     @livewireStyles
     @yield('style')
    </head>
    <body class="antialiased">
 <!-- Navbar Start -->
    <nav class="navbar  border-bottom navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="{{url('')}}" class="navbar-brand d-flex align-items-center border-end  px-lg-5">
            <h2 class="m-0 text-primary">DQGS</h2>
        </a>

        <div class=" p-0 collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{url(' ')}}" class="{{ Request::is(' ') ? '  text-primary' : '' }} nav-item nav-link active "><h5>الرئيسيه</h4></a>
                <a href="{{url('user/Diagnosis')}}" class=" {{ Request::is('user/Diagnosis') ? ' text-primary' : '' }}nav-item nav-link"><h5>تحاليل </h4></a>
                <a href="service.html" class="nav-item nav-link"><h5>الالعاب </h4></a>
                <a href="project.html" class="nav-item nav-link"><h5>فيديهات </h4></a>


            </div>

      </div>
    </nav>

    <!-- Navbar End -->


         @yield('content')


@yield('script')


@livewireScripts
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>


    </body>
</html>
