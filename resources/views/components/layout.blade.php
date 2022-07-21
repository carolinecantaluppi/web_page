<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- SCSS --}}
    <link rel="stylesheet" href="{{asset('sass/app.scss')}}">
        <title>Document</title>
    </head>
    <body>
        <x-navbar/>
            {{$slot}}
        <x-footer/>
        {{-- JavaScript --}}
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>