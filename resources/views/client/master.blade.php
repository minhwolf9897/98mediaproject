<!DOCTYPE html>
<html class="full-height" lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | @yield('title')</title>

    @include('client.partials._stylesheet')
</head>

<body>
    @include('client.partials._head')
    <div id="content">
        @yield('content')
    </div>
    @include('client.partials._footer')

    @include('client.partials._script')
</body>

</html>