<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ResizeImage;

class ImgStoreService
{
    protected $path = 'images';

    public function projects($file): string
    {
        $path = $this->path.'/projects';
        $storage = Storage::disk('public')->path($path);
        $extension = $file->getClientOriginalExtension();
        $name = Str::random(6) . '_' . time() ;

        $this->resizeSave($file, $storage.$name.'.'.$extension, 500);

        return $path.$name.'.'.$extension;
    }

    public function resizeSave($file, $name, $width = null, $height = null): \Intervention\Image\Image
    {
        return ResizeImage::make($file)
            ->resize($width, $height,function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save($name);
    }
}
