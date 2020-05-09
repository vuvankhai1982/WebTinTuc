<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';
    protected $fillable = [
        'title',
        'status_id',
        'type_id',
        'image',
        'image_url',
        'thumbnail_image',
        'noi_bat',
        'user_id',
        'tom_tat',
        'noi_dung',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTagNamesAttribute()
    {
        return $this->tags->pluck('name')->implode(', ');
    }
}
