<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        .btn{
            border: 1px solid #f5e876;
            border-radius: 2px;
            padding:.25em 1em;
            background-color: #f5e876;
            color:#232c33;
            transition: transform 150ms linear;
        }
        .btn:hover {
             /* background-color: #232c33;
            border: 1px solid #232c33;
            color:#f5e876; */
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans bg-image2 overflow-hidden ">
<x-welcome-svg />
<div class="flex flex-col ">
    @if(Route::has('login'))
        <div class="flex absolute z-30 right-12 top-8 space-x-6 ">
            @auth
                <div class="btn">
                    <a href="{{ url('/dashboard') }}" class="no-underline btn text-sm font-semibold  uppercase">{{ __('Dashboard') }}</a>
                </div>

            @else
                <div class="btn">
                    <a href="{{ route('login') }}" class="no-underline  text-sm font-semibold  uppercase">{{ __('Login') }}</a>
                </div>

                @if (Route::has('register'))
                    <div class="btn">
                        <a href="{{ route('register') }}" class="no-underline text-sm font-semibold  uppercase">{{ __('Register') }}</a>
                    </div>

                @endif
            @endauth
        </div>
    @endif


</div>

<x-welcome-texts/>
</body>
</html>
