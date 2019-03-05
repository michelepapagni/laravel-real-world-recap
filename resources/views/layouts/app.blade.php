<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css' )}}">
    <title>Laravel Recap</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admission.index') }}">@lang('general.admission')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/it">IT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/en">EN</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')
</body>

</html>
