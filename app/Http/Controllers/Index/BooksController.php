<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BooksModel as Books;

class BooksController extends Controller
{
    //搜索詳情頁面
    public function suo(){
        $name=$_GET['books_name'];
        $cate=$_GET['books_cate'];
        $where=[];
        if($name==null  ) {
            echo '非常抱歉您搜索的书籍或作者不存在，请您确认过后在搜索一下！';
            header("refresh:2,url='/'");
            die;
        }

        if($cate){
            $where=['books_cate'=>$cate];
        }

        $data=Books::where('books_name','=',$name)->where($where)->first();
        if($data==null){
            $data=Books::where('books_man','=',$name)->where($where)->first();
            if($data==null) {
                echo '非常抱歉您搜索的书籍或作者不存在，请您确认过后在搜索一下！';
                header("refresh:2,url='/'");
                die;
            }
        }
        //搜索排名自增加一
        if($data){
            Books::where('books_id','=',$data->books_id)->increment('books_incr',1);
        }
        return view('books.suolist',['data'=>$data]);
    }

    //月票投票
    public function yue(){
        $yue=$_GET['books_yue'];
        $res=Books::where('books_id','=',$yue)->increment('books_yue');
        if($res){
            echo '投票成功，正在为您跳转首页';
            header("refresh:2,url='/'");
        }
    }

    public function alipay()
    {
        //支付宝沙箱
        $url='https://openapi.alipaydev.com/gateway.do';

        //公共请求参数
        $appid='2016101100657504';
        $method = 'alipay.trade.page.pay';
        $charset = 'utf-8';
        $signtype = 'RSA2';
        $sign = '';
        $timestamp = date('Y-m-d H:i:s');
        $version = '1.0';
        $return_url = 'http://le.80098.top/books/return';
        $notify_url = 'http://le.80098.top/books/notify';
        $biz_content = '';

        //请求参数
        $out_trade_no = time() . rand(1111,9999);       //商户订单号
        $product_code = 'FAST_INSTANT_TRADE_PAY';
//        $total_amount = 514704.22;
        $total_amount = $_GET['amount']??"";
        if($total_amount==''){
            echo '请您至少选择一个商品';
            die;
        }
        $subject = '月票订单' . $out_trade_no;

        $request_param = [
            'out_trade_no'  => $out_trade_no,
            'product_code'  => $product_code,
            'total_amount'  => $total_amount,
            'subject'       => $subject
        ];

        $param = [
            'app_id'        => $appid,
            'method'        => $method,
            'charset'       => $charset,
            'sign_type'     => $signtype,
            'timestamp'     => $timestamp,
            'version'       => $version,
            'notify_url'    => $notify_url,
            'return_url'    => $return_url,
            'biz_content'   => json_encode($request_param)
        ];

        ksort($param);

        $str = "";
        foreach($param as $k=>$v)
        {
            $str .= $k . '=' . $v . '&';
        }

        $str = rtrim($str,'&');

        //jisuanqianming
        $key = storage_path('keys/app_priv');
        $priKey = file_get_contents($key);
        $res = openssl_get_privatekey($priKey);
        openssl_sign($str, $sign, $res, OPENSSL_ALGO_SHA256);
        // dd($res);
        $sign = base64_encode($sign);
        $param['sign'] = $sign;
        $param_str = '?';
        foreach($param as $k=>$v){
            $param_str .= $k.'='.urlencode($v) . '&';
        }
        $param_str = rtrim($param_str,'&');
        $url = $url . $param_str;
        //发送GET请求
        //echo $url;die;
        header("Location:".$url);

    }

    //支付同步跳转
    public function return(){
        echo "支付成功 同步跳转";
    }

    //支付宝异步跳转
    public function notify(){
        // 1 接收 支付宝的POST数据
        //$data1 = file_get_contents("php://input");
        $data2 = json_encode($_POST);
        //$log1 = date('Y-m-d H:i:s') . ' >>> ' .$data1 . "\n";
        $log2 = date('Y-m-d H:i:s') . ' >>> ' .$data2 . "\n";
        //file_put_contents('alipay.log',$log1,FILE_APPEND);
        file_put_contents('logs/alipay.log',$log2,FILE_APPEND);
        $data = $_POST;
        $sign = base64_decode($data['sign']);
        unset($data['sign_type']);
        unset($data['sign']);
        //echo '<pre>';print_r($data);echo '</pre>';
        $d = [];
        // 2 url_decode
        foreach($data as $k=>$v){
            $d[$k] = urldecode($v);
        }
        //echo '<pre>';print_r($d);echo '</pre>';die;
        ksort($d);
        $str = "";
        foreach($d as $k=>$v){
            $str .= $k . '=' . $v . '&';
        }
        //带签名字符串
        $str = rtrim($str,'&');
        //读取公钥文件
        $pubKey = file_get_contents(storage_path('keys/ali_pub'));
        //转换为openssl格式密钥
        $res = openssl_get_publickey($pubKey);
        // 验证签名
        $result = (bool)openssl_verify($str, $sign, $res, OPENSSL_ALGO_SHA256);
        //释放资源
        openssl_free_key($res);
        if($result){
            $log = date('Y-m-d H:i:s') . ' >>> 验签通过 1' . "\n\n";
            file_put_contents("logs/alipay.log",$log,FILE_APPEND);
        }else{
            $log = date('Y-m-d H:i:s') . ' >>> 验签失败 0' . "\n\n";
            file_put_contents("logs/alipay.log",$log,FILE_APPEND);
        }
        echo 'success';
    }

    protected function verify($data, $sign) {
        //读取公钥文件
        $pubKey = file_get_contents(storage_path('keys/ali_pub'));
        //转换为openssl格式密钥
        $res = openssl_get_publickey($pubKey);
        $result = (bool)openssl_verify($data, $sign, $res, OPENSSL_ALGO_SHA256);
        //释放资源
        openssl_free_key($res);
        var_dump($result);
        return $result;
    }
}
