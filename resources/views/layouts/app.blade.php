<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials_app._head')
</head>

<body>
    @include('partials_app._nav')

<main class="py-4">
    @yield('content')
</main>

    @include('partials_app._footer')

    @include('partials_app._scripts')

    @yield('scripts')
</body>

</html>
