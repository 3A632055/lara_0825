<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comment extends Model
{
    //
    protected $fillable = ['content'];
    //單元練習< 練習7-3> 開啟 Comment.php ，增加關聯
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
