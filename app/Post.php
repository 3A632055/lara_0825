<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

    //< 練習2-3> 設定 Post.php 的 fillable 屬性
    protected $fillable = [
        'title',
        'content',
        'is_feature'
    ];
}
