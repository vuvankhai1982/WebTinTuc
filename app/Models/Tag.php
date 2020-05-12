<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
 protected $table = 'tags';
    protected $fillable = [
        'name',
    ];
public function posts()
{
    return $this->hasMany(Post::class);
}
}
