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
</body>
</html>