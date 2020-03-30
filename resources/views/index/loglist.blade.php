<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>确认登录</title>
</head>
<body>
        <form action="{{url('index/ajaxre')}}" method="get">
            @csrf
            <input type="hidden" name="name" value="2">
            <input type="submit" value="点击确认登录">
        </form>
</body>
</html>