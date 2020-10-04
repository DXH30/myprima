<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{$title}}</title>
    </head>
    <body>
        @if(session('status'))
        <div class="alert alert-succes">
            {{session('status')}}
        </div>
        @endif
        <form action="{{url('login')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="username"><br/>
            <input type="password" name="password" placeholder="pass"><br/>
            <input type="submit" value="kirim">
        </form>
        <a href="{{url('register')}}">register</a>
    </body>
</html>
