<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrumbowController extends Controller
{
    public function upload()
    {
        Storage::put('trumbow', request()->image);
        return [
            'success' => true
        ];
    }
}
