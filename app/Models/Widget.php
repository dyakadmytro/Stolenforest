<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    use HasFactory;

    public $timestamps = null;

    protected $fillable = [
        'name', 'options'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'widget_post');
    }
}
