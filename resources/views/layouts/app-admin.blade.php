<!doctype html>
<html lang="en">

<head>
    @include('partials_admin._head')
</head>

<body>
    @include('partials_admin._nav')

    @include('partials_admin._sidebar')

<!-- ////  MAIN CONTENT \\\\ -->
<div class="main" style="padding-top: 86px; padding-left: 260px;">
    @include('partials_admin._messages')
    @yield('content')
</div>
<!-- ////  END OF MAIN CONTENT \\\\ -->


    @include('partials_admin._footer')

    @include('partials_admin._scripts')

    @yield('scripts')
</body>

</html>