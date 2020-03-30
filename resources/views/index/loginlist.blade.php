<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>登录页面</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/assets/css/form-elements.css">
        <link rel="stylesheet" href="/assets/css/style.css">

        <!-- Favicon and touch icons -->
{{--        <link rel="shortcut icon" href="/assets/ico/favicon.png">--}}
{{--        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">--}}
{{--        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">--}}
{{--        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">--}}
{{--        <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">--}}

    </head>

    <body>
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Bootstrap</strong> Registration Form</h1>
                        </div>
                    </div>
                    <div class="row">
                           
                    	<div class="col-sm-6 text">
                                <h1>微信扫描登录 </h1>
                            <img style="width:230px" class="images" src="{{url('./storage/1.png')}}" alt="">
                            <div><p class="shixiao"></p><span class="content"></span></div>
                    	</div>
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>欢迎您登录</h3>
                            		<h4>还没有账号点击<a href="">注册</a></h4>
                        		</div>
                            </div>
                            <div class="form-bottom">
                               <form action="{{url('index/logins')}}" method="post">
                                @csrf
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">First name</label>
			                        	<input type="text" name="name" placeholder="输入您的手机号" class="form-first-name form-control" id="form-first-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">Last name</label>
			                        	<input type="password" name="pwd" placeholder="输入您的密码" class="form-last-name form-control" id="form-last-name">
                                    </div>
			                        <button type="submit" class="btn">点击登录</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Javascript -->
        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.backstretch.min.js"></script>
        <script src="/assets/js/retina-1.1.0.min.js"></script>
        <script src="/assets/js/scripts.js"></script>
    </body>
</html>
<script>
    $(function(){
        setInterval(shixiao,1000);
        time=60;
        setInterval(getstatus,1000);
    })
    function shixiao(){
        if(time>0){
            var str = "二维码"+time+"s 后失效，请尽快操作";
            $('.shixiao').html(str);
            time --;
        }else{
            $('.images').attr('src',"{{url('./storage/2.png')}}");
            $(".content").html('');
            var str = "二维码已经失效，请点击图片重新获取";
            $('.shixiao').html(str);
        }
    }
    function getstatus(){
        $.ajax({
            url:"{{url('index/ajaxre')}}",
            data:{user_id:"{{session('name')}}"},
            type:"GET",
            success:function(res){
                var str = "";
                if(res==0){
                    str += "等待扫描"
                }else if(res==1){
                    $('.images').attr('src',"{{url('./storage/3.png')}}");
                    str += "扫码成功，等待授权";
                }else if(res==2){
                    str +="等待跳转";
                    location.href="{{url('/')}}";
                }
                $('.content').html(str);
            }
        })
    }
    $('.images').click(function(){
        history.go(0)
    })
</script>