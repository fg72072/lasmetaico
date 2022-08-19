<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/vendor/font-awsome/css/all.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front/vendor/slick-1.8.1/slick/slick.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('front/vendor/aos-master/dist/aos.css')}}" />
        <link rel="shortcut icon" href="{{asset('front/images/ddlogo.png')}}" type="image/x-icon">
        <title>@yield('title')</title>
    </head>
<body>
    @include('includes.header')
    @yield('section')
    @include('includes.footer')

</body>

</html>