<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | @yield('title')</title>

    @include('admin.partials._stylesheet')
</head>

<body class="fixed-sn black-skin">
    @include('admin.partials._head')
    <div class="container-fluid">
        <main>
            @yield('content')
        </main>
    </div>
    @include('admin.partials._script')
</body>

</html>