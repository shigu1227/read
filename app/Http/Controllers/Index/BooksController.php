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
            echo '投票成功，正在为您跳转书籍详情页面';
            header("refresh:2,url='/'");
        }
    }
}
