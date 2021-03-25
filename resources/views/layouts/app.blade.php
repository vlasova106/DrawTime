<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('inc.head')
</head>
<body>

    @include('inc.menu')

    <div class="content">
        @yield('content')

        @include('inc.footer')
    </div>

</body>
</html>
