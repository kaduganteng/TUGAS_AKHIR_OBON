<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $table = "media";
    protected $guarded = ['id'];
    public function user()
    {

        return $this->belongsTo(User::class);
    }
    public function post()
    {

        return $this->hasmany(Post::class);
    }
}
