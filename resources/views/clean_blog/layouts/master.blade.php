<!DOCTYPE html>
<html lang="en">

<head>

@include('clean_blog.partials.head')

</head>

<body>

<!-- Navigation -->
@include('clean_blog.partials.nav')
<!-- Navigation -->


@yield('content')

<hr>

<!-- Footer -->
@include('clean_blog.partials.footer')
<!-- Footer -->


<!--scripts-->
@include('clean_blog.partials.scripts')
<!--scripts-->





</body>

</html>
