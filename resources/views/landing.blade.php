<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{$title}}</title>
    </head>
    <body>
        {{$pesan}} 
        @if(isset($auth))
        {{$auth->name}}
        @else
        Harap Login terlebih dahulu
        <a href="{{url('login')}}">login</a>
        <a href="{{url('register')}}">register</a>
        @endif
        <a href="{{url('logout')}}">logout</a>
    </body>
</html>
