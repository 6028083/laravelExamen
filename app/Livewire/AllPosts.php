<?php

namespace App\Livewire;

use App\Models\Post; // Add this line
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class AllPosts extends Component
{
    protected $listeners = [
        'deletePostAction'
    ];

    public function deletePost($id)
    {
        $this->dispatch('deletePost', [
            'title' => 'Weet je het zeker?',
            'html' => 'wilt dit bericht verwijderen.',
            'id' => $id
        ]);
    }

    public function deletePostAction($id)
    {
        $post = Post::find($id);
        $path = "storage/images/post_images/";
        $featured_image = $post->featured_image;

        if ($featured_image != null && Storage::disk('public')->exists($path, $featured_image)) {

            Storage::disk('public')->delete($path, $featured_image);
        }

        $delete_post = $post->delete();

        if ($delete_post) {
            $this->showToastr('Post has been successfully deleted.', 'success');
        } else {
            $this->showToastr('Something went wrong.', 'error');
        }
    }
    public function render()
    {
        $posts = Post::all();

        return view('livewire.all-posts', ['posts' => $posts]);
    }
}
