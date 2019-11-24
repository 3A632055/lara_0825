<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

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

    //單元練習< 練習7-2> 開啟 Post.php ，增加關聯
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

