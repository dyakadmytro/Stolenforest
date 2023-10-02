<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Post extends Model
{
    use HasFactory;

//    public function article(): MorphOne
//    {
//        return $this->morphOne(Article::class, 'postable');
//    }
//
//    public function project(): MorphOne
//    {
//        return $this->morphOne(Project::class, 'postable');
//    }

    public function postable(): MorphTo
    {
        return $this->morphTo();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }
}
