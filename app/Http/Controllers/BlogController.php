<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class BlogController extends UserController
{
    public function readPost($slug)
    {
        if (!$slug) {
            return abort(404);
        } else {
            $post = Post::where('post_slug', $slug)
                ->first();
            $data = [
                'pageTitle' => Str::ucfirst($post->post_title),
                'post' => $post,
            ];
            return view('single_post', $data);
        }
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(['success' => 'Post deleted successfully']);
    }
}
