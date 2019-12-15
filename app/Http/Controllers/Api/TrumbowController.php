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
        // リサイズ
        $image = Image::make(request()->file('image'))->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        // 画像のハッシュ名を取得
        $hashName = request()->file('image')->hashName();
        // publicストレージに保存
        Storage::put("trumbow/{$hashName}", (string) $image->encode());
        // レスポンスを返す
        return ['success' => true, 'url' => asset("storage/trumbow/{$hashName}")];
    }
}
