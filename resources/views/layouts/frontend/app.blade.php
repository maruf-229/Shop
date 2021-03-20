<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.frontend.includes.head')
</head>
<body>
@include('layouts.frontend.includes.top-header')
@include('layouts.frontend.includes.header')
@yield('content')
@include('layouts.frontend.includes.footer')
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
@include('layouts.frontend.includes.foot')
</body>
</html>
