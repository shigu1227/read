<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>注册</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/assets/css/form-elements.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="shortcut icon" href="/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
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
                    	<div class="col-sm-6 book">
                    		<img src="/assets/img/ebook.png" alt="">
                    	</div>
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>请您注册</h3>
                            		<p>Fill in the form below to get instant access:</p>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="{{url('login/regins')}}" method="post" class="registration-form">
                                        @csrf
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-first-name">First name</label>
			                        	<input type="text" name="user_tel" placeholder="请输入您的手机号" class="form-first-name form-control" id="tel">
			                        </div>
			                        <div class="form-group">
                                            <span style="width:40%;float:right" class="btn yan">发送验证码</span>
                                        <input type="text" name="yan" style="width:49%" placeholder="请输入验证码" class="form-last-name form-control" id="yan">
                                    </div>
                                    <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Last name</label>
                                            <input type="password" name="user_pwd" placeholder="输入您的密码" class="form-last-name form-control" id="form-last-name">
                                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="password" name="pwds" placeholder="确认密码" class="form-email form-control" id="form-email">
			                        </div>
			                        <button type="submit" class="btn">点击注册</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.backstretch.min.js"></script>
        <script src="/assets/js/retina-1.1.0.min.js"></script>
        <script src="/assets/js/scripts.js"></script>
    </body>
</html>
<script>
        $(document).on('click','.yan',function(){
            var tel = $('#tel').val();
            if(!(/^1[3456789]\d{9}$/.test(tel))){ 
                alert("手机号码有误，请重填");  
                return false; 
            } 
            $.ajax({
                url:"{{url('login/yan')}}",
                data:{tel:tel},
                type:'POST',
                dataType:'JSON',
                success:function(res){
                    if(res.return_code==00000){
                        alert('ok');
                    }
                }
            });
        })
</script>