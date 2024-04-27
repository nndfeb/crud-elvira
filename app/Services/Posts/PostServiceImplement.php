<?php

namespace App\Services\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Request;

class PostServiceImplement implements PostService
{
    public function getPost()
    {
        $data = Post::latest();
        return $data;
    }

    function uploadImage(Request $request, $fileName)
    {
        $image = $request->file($fileName);
        $image->storeAs('public/posts', $image->hashName());
    }
}
