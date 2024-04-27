<?php

namespace App\Services\Posts;

use Illuminate\Support\Facades\Request;

interface PostService
{
    public function getPost();
    public function uploadImage(Request $request, $fileName);
}
