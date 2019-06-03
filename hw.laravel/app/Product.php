<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['CODE','NAME','PRICE','QUANTITY'];
    public $timestamps = false;// câu lệnh để tránh lỗi updated_at
}
