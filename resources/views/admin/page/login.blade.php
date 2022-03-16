<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin Login Form</h1>
    <form class="form" action="{{route('loginPost')}}" method="post">
        {{ csrf_field() }}

        @if(session()->has('notice'))
                <p style="color:red">
                    {{session()->get('notice')}}
                </p>
        @endif

        <input type="text" name="email" placeholder="Tên đăng nhập hoặc email">
        <input type="text" name="pass" placeholder="Nhập mật khẩu">
        <input type="submit" name="submit" id="" value="Login">
    </form>
</body>
</html>
