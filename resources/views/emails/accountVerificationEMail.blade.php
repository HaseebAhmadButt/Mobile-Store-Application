<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/user.auth.css') }}"> --}}
    <title>
        PhoneFusion Account Verification
    </title>
</head>

<body>
    <h1>
        {{$mailData['title']}}
    </h1>
    <p>
        {{$mailData['Body']}}
    </p>
</body>

</html>
