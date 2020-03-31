<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QRcode;
use App\Model\erweima as Er;
use App\Model\UserModel as User;
use Illuminate\Support\Facades\Redis;
use App\Model\BooksModel as Books;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    //首页
    public function index(){
        //热词排序
        $data=Books::orderBy('books_incr','desc')->take(5)->get();
        $datas=Books::orderBy('books_incr','desc')->take(10)->get();
        $yue=Books::orderBy('books_yue','desc')->take(10)->get();
        $cate=DB::table('books_cate')->get();
        return view('index.index',['data'=>$data,'cate'=>$cate,'datas'=>$datas,'yue'=>$yue]);
    }
    public function logins(){
        $name=$_POST['name'];
        $pwd=$_POST['pwd'];
        if($name==null){
            echo '手机号不能为空,正在为您跳转请稍等！！';
            header("refresh:2,url='/index/login'");
            die;
        }
        $data=User::where('user_tel','=',$name)->first();
        if(empty($data)){
            echo '用户名不存在,正在为您跳转请稍等！！';
            header("refresh:2,url='/index/login'");
            die;
        }else{
            if($data->user_pwd==$pwd){
                session(['name'=>$name]);
                echo '登录成功,正在为您跳转请稍等！！';
                header("refresh:2,url='/'");
                die;
            }else{
                echo '密码不正确,正在为您跳转请稍等！！';
                header("refresh:2,url='/index/login'");
                die;
            }
        }
    }
    public function wxs(){
        $log_file="wx.log";
        $xml_str=file_get_contents("php://input");
        $data=date('Y-m-d H:i:s',time()).$xml_str;
        file_put_contents($log_file,$data,FILE_APPEND);
    }
    public function ajaxre($arr=[]){
       $str=Redis::get('str');
       echo $str??'';
    }
    //登录展示页面
    public function loginlist(){
        $uid=$this->wxre();
        return view('index.loginlist',['userid'=>$uid]);
    }
    //微信二维码生成
    public function wxre(){
      $url =  storage_path('app/public/phpqrcode.php');
      include($url);
      $obj = new QRcode();
      $uid=uniqid();
      $url_s="http://le.80098.top/imag?uid=".$uid;
      $obj->png($url_s,storage_path('app/public/1.png'));
      return $uid; 
    }


    public function imag(){
        $uid=$_GET['uid'];
        $appid='wxc090c2e5cc0b0c2a';
        $uri=urlencode("http://le.80098.top/login");
        $url ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$uri&response_type=code&scope=snsapi_userinfo&state=$uid#wechat_re";
        header('Location:'.$url);
    }
    public function login(){
        $code=$_GET['code'];
        $appid='wxc090c2e5cc0b0c2a';
        $se='f2d527f6f3da798c1edf6d3449ee63d8';
        $url='https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$se.'&code='.$code.'&grant_type=authorization_code';
        $get=file_get_contents($url);
        $arr=json_decode($get,true);
        $token=$arr['access_token'];
        $openid=$arr['openid'];
        $user_url='https://api.weixin.qq.com/sns/userinfo?access_token='.$token.'&openid='.$openid.'&lang=zh_CN';
        $user_get=file_get_contents($user_url);
        $user_arr=json_decode($user_get,true);
        Er::insert(['e_status'=>1,'e_uid'=>$user_arr['openid']]);
        Redis::set('str',1);
        return view('index.loglist');
    }
    public function val(){
        return 1;
    }
    //微信接口配置
    public function wx(){
        echo $_GET['echostr'];
    }
}
