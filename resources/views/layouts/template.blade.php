<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Favicon -->

    <link rel="shortcut icon" href="{{ asset('assets/users/img/favicon.ico') }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" />
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}">

    <!-- Flaticon Font -->
    <link rel="stylesheet" href="{{ asset('assets/users/lib/flaticon/font/flaticon.css') }}" type="text/css">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/users/lib/owlcarousel/assets/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/users/lib/lightbox/css/lightbox.min.css') }}" type="text/css">
    <!-- Customized Bootstrap Stylesheet -->

    <link rel="stylesheet" href="{{ asset('assets/users/css/style.css') }}" type="text/css">
</head>

<body>


    @include('layouts.template-header')

    @yield('content')

    @include('layouts.template-footer')



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->

    <script type="text/javascript" src="{{ URL::asset('assets/admin/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/admin/js/core/libraries/jquery.min.js') }}"></script>

    <script src="{{ URL::asset('assets/users/lib/easing/easing.min.js') }}"></script>
    <script src="{{ URL::asset('assets/users/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/users/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/users/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ URL::asset('assets/users/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ URL::asset('assets/users/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ URL::asset('assets/users/js/main.js') }}"></script>
    @yield('script')
</body>

</html>
