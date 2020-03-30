<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
   //主键id
   public $primaryKey='user_id';

   //绑定表名
   protected $table='user';
      //关闭时间戳
  public $timestamps=false;

  //黑名单
  protected $guarded=[];
}
