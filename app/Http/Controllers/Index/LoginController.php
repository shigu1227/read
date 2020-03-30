<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel as User;
class LoginController extends Controller
{

    public function reglist(){
        return view('index.reglist');
    }
    //注册
    public function regins(){
        $str=session('str');
        $yan=$_POST['yan'];
        $tel=$_POST['user_tel'];
        $pwd=$_POST['user_pwd'];
        $pwds=$_POST['pwds'];
        $arr=[
            'user_tel'=>$tel,
            'user_pwd'=>$pwd
        ];
       
        if($str!=$yan){
            echo '您的验证码不正确,正在为您跳转请稍等！！';
            header("refresh:2,url='/login/reg'");
            die;
        }
        if($pwd!=$pwds){
            echo '您的两次密码不一致,正在为您跳转请稍等！！';
            header("refresh:2,url='/login/reg'");
            die;
        }
        $res=User::insert($arr);
        if($res){
            echo '注册成功,正在为您跳转请稍等！！';
            header("refresh:2,url='/index/login'");
        }
       
       
    }
    //注册验证码
    public function yan(){
        $tel=request()->input('tel');
        $str = rand(1000,9999);
        session(['str'=>$str]);
        $host = "http://dingxin.market.alicloudapi.com";
        $path = "/dx/sendSms";
        $method = "POST";
        $appcode = "48fa2af8f54d4a6fada4e7ec7f5df15a";
        $headers = array();
        array_push($headers, "Authorization:APPCODE " . $appcode);
        $querys = "mobile=$tel&param=code%3A$str&tpl_id=TP1711063";
        $bodys = "";
        $url = $host . $path . "?" . $querys;
    
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        if (1 == strpos("$".$host, "https://"))
        {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        }
        echo curl_exec($curl);
    }
}
