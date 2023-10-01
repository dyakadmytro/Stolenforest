<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Project extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function post(): MorphTo
    {
        return $this->morphTo(Post::class, 'postable');
    }
}
