<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TrumbowController extends Controller
{
    public function upload()
    {
        $image = Image::make(request()->file('image'))->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $name = request()->file('image')->hashName();
        Storage::put("trumbow/{$name}", (string) $image->encode());
        return [
            'success' => true
        ];
    }
}
