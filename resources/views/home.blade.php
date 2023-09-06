<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | {{config('app.name', 'Laravel')}}</title>
    @include('CommonCssResources.css')
    <style>
        header{
            padding: unset;
        }
        body{
            margin: 0;
            padding: unset;
            background-color: rgba(0, 0, 0, 0.1);
            /* box-sizing: border-box; */
        }
        a{
            text-decoration: none;
            color: rgb(0, 0, 0);
        }
    </style>
</head>
<body>
    <header>
        <x-header />
    </header>
</body>
</html>
