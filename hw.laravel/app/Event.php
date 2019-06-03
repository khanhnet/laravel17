<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable =['title','content','time','location'];
    public $timestamps = false;// câu lệnh để tránh lỗi updated_at

}
