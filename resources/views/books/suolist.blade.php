<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>书籍详情页面</title>
</head>
<body>
    <h3>书名：{{$data->books_name}}</h3>
    <h3>作者名：{{$data->books_man}}</h3>
    <h3>上传时间：{{date('Y-m-d H:i:s',$data->books_time)}}</h3>
    <h3>类型：{{$data->books_cate}}</h3>
    <form action="{{url('books/yue')}}" method="get">
        @csrf
        <input type="hidden" value="{{$data->books_id}}" name="books_yue">
        <input type="submit" value="点击投票月票">
    </form>
    <form action="{{url('books/alipay')}}" method="get">
        <input type="radio" name="amount" value="1">1个月票<br>
        <input type="radio" name="amount" value="10">10个月票<br>
        <input type="radio" name="amount" value="20">20个月票<br>
        <input type="radio" name="amount" value="30">30个月票<br>
        <input type="radio" name="amount" value="40">40个月票<br>
        <input type="radio" name="amount" value="50">50个月票<br>
        <input type="radio" name="amount" value="100">100个月票<br>
        <input type="submit" value="点击购买">
    </form>
</body>
</html>