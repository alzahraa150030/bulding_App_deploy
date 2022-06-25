<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    {{--If user is loggein--}}

    @if(Auth::check())
    Your name is:{{ Auth::user()->name}}
    <br>
    Your email is:{{ Auth::user()->email}}

    @else
    You are not logged in 
    @endif
</body>
</html>