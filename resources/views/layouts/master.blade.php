<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bedanshi Blogs- A way of life</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/imgs/theme/favicon.png') }}">
    <!-- Template CSS  -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/widgets.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
</head>

<body>

    <!-- Start Header -->
    @include('partials.header')
    <!-- End Header -->
    @yield('content')
    <!-- Footer Start -->
    @include('partials.footer')
    <!-- Footer End -->

</body>

</html>
