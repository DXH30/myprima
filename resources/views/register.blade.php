<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>
</head>
<body>
<form action="{{url('register')}}" method="POST">
@csrf
<input type="text" name="name" placeholder="username"><br />
<input type="email" name="email" placeholder="email"><br />
<input type="password" name="password" placeholder="password"><br />
<input type="password" name="password_confirm" placeholder="password confirm"><br />
<select id="deptid" name="deptid">
@foreach($department as $dept)
    <option value="{{$dept->id}}">{{$dept->name}}</option>
@endforeach
</select><br />
@foreach($department as $dept)
<input type="checkbox" name="deptauth[]" value="{{$dept->id}}">{{$dept->name}}<br />
@endforeach
<input type="submit" value="kirim">
</form>
</body>
</html>
