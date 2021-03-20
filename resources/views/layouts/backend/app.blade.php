<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.backend.includes.head')
</head>
<body>
<div class="wrapper">
    @include('layouts.backend.includes.sidebar')
    <div class="main-panel">
        @include('layouts.backend.includes.header')
        @yield('content')
        @include('layouts.backend.includes.footer')
    </div>
</div>
@include('layouts.backend.includes.foot')
</body>
</html>
