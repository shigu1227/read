<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class erweima extends Model
{
       //主键id
       public $primaryKey='e_id';

       //绑定表名
       protected $table='erweima';
          //关闭时间戳
      public $timestamps=false;
  
      //黑名单
      protected $guarded=[];
}
