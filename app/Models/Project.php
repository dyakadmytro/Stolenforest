<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Project extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'link', 'description', 'cover_img_id'
    ];

    public function post(): MorphOne
    {
        return $this->morphOne(Post::class, 'postable');
    }

    protected function createdAt(): Attribute
    {
        $self = $this;
        return Attribute::make(
            get: function () use($self) {
                return $self?->post->created_at;
            },
        );
    }

    public function cover()
    {
        return $this->belongsTo(Image::class, 'cover_img_id');
    }
}
