<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" >
</head>
<body>
    @include('include.header')
    <div class="container">
        @include('include.messages')
        @yield('content')
    </div>
</body>
</html>