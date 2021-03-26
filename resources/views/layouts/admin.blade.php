<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hawk-admin</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('admin/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('admin/demo/demo.css') }}" rel="stylesheet" />
</head>
<body>
<div id="app">
    <main class="">
        <div class="wrapper ">
            @yield('sidebar')
            <div class="main-panel">
                @include('admin.navbar')
                @yield('content')
                @include('admin.footer')
            </div>
        </div>
    </main>
</div>
<script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
<script src="{{ asset('admin/js/core/bootstrap-material-design.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $().ready(function () {
            $('.nav-item').click(function () {
                console.log($(this));
                $(this).className = "nav-item active";
            })
        })
    })
</script>
</body>
</html>
