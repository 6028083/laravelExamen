<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\File;
use App\Models\Setting;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;






class AuthController extends UserController
{
    public function index(Request $request)
    {
        return view('back.pages.home');
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('auth.login');
    }



    public function ResetFrom(Request $request, $token = null)
    {
        $data = [
            'pageTitle' => 'Reset Password'
        ];
        return view('back.pages.auth.reset', $data)->with(['token' => $token, 'email' => $request->email]);
    }

    public function changeProfilePicture(Request $request)
    {
        $user = User::find(auth('web')->id());
        $path = 'back/dist/img/authors/';
        $file = $request->file('file');
        $old_picture = $user->getAttributes()['picture'];
        $file_path = $path . $old_picture;
        $new_picture_name = 'AIMG' . $user->id . time() . rand(1, 100000) . '.jpg';

        if ($old_picture != null && File::exists(public_path($file_path))) {
            File::delete(public_path($file_path));
        }
        $upload = $file->move(public_path($path), $new_picture_name);
        if ($upload) {
            $user->update([
                'picture' => $new_picture_name
            ]);
            return response()->json(['status' => 1, 'msg' => 'Je profielfoto is succesvol bijgewerkt.']);
        } else {
            return response()->json(['status' => 0, 'msg' => 'Er is iets fout gegaan.']);
        }
    }
    public function changeBlogLogo(Request $request)
    {
        $settings = Setting::find(1);
        $logo_path = 'back/dist/img/logo-favicon/';
        $old_logo = $settings->blog_logo;
        $file = $request->file('blog_logo');

        if ($request->hasFile('blog_logo')) {
            if ($old_logo != null && File::exists(public_path($old_logo))) {
                File::delete(public_path($old_logo));
            }

            $filename = time() . '_' . rand(1, 100000) . '_blog_logo.png';
            $file->move(public_path($logo_path), $filename);

            $settings->update([
                'blog_logo' => $filename
            ]);

            return response()->json(['status' => 1, 'msg' => 'Blog foto is succesvol bijgewerkt.']);
        }
        return response()->json(['status' => 0, 'msg' => 'Er is geen bestand geüpload.']);
    }
    public function createPost(Request $request)
    {
        $request->validate([
            'post_title' => 'required|unique:posts,post_title',
            'post_content' => 'required',
            'featured_image' => 'required|mimes:jpeg,jpg,png|max:1024',
        ]);


        if ($request->hasFile('featured_image')) {
            $path = "images/post_images/";
            $file = $request->file('featured_image');
            $filename = $file->getClientOriginalName();
            $new_filename = time() . '_' . $filename;

            $upload = Storage::disk('public')->put($path . $new_filename, (string) file_get_contents($file));

            $post_thumbnails_path = $path . 'thumbnails';
            if (!Storage::disk('public')->exists($post_thumbnails_path)) {
                Storage::disk('public')->makeDirectory($post_thumbnails_path, 0755, true, true);
            }



            if ($upload) {
                $post = new Post();
                $post->post_title = $request->post_title;
                $post->post_slug = Str::slug($request->post_title);
                $post->post_content = $request->post_content;
                $post->featured_image = $new_filename;

                $saved = $post->save();

                if ($saved) {
                    return response()->json(['code' => 1, 'msg' => 'Nieuw bericht is succesvol toegevoegd.']);
                } else {
                    return response()->json(['code' => 3, 'msg' => 'Er is iets misgegaan bij het opslaan van berichtgegevens.']);
                }
            } else {
                return response()->json(['code' => 3, 'msg' => 'Er is iets misgegaan bij het uploaden van de uitgelichte afbeelding.']);
            }
        }
    }


    public function editPost(Request $request)
    {
        if (!request()->post_id) {
            return abort(404);
        } else {
            $post = Post::find(request()->post_id);
            $data = [
                'post' => $post,
                'pageTitle' => 'edit Post',
            ];
            return view('back.pages.edit_post', $data);
        }
    }

    public function updatePost(Request $request)
    {
        if ($request->hasFile('featured_image')) {
            $request->validate([
                'post_title' => 'required|unique:posts,post_title,' . $request->post_id,
                'post_content' => 'required',
                'featured_image' => 'mimes:jpeg,jpg,png|max:1024',
            ]);


            $path = "images/post_images/";
            $file = $request->file('featured_image');
            $filename = $file->getClientOriginalName();
            $new_filename = time() . '_' . $filename;

            $upload = Storage::disk('public')->put($path . $new_filename, (string) file_get_contents($file));

            $post_thumbnails_path = $path . 'thumbnails';
            if (!Storage::disk('public')->exists($post_thumbnails_path)) {
                Storage::disk('public')->makeDirectory($post_thumbnails_path, 0755, true, true);
            }

            if ($upload) {
                $old_post_image = Post::find($request->post_id)->featured_image;
                if ($old_post_image != null && Storage::disk('public')->exists($path . $old_post_image)) {
                    Storage::disk('public')->delete($path . $old_post_image);
                    if (Storage::disk('public')->exists($path . 'thumbnails/thumb_' . $old_post_image)) {
                        Storage::disk('public')->delete($path . 'thumbnails/thumb_' . $old_post_image);
                    }
                }

                $post = Post::find($request->post_id);
                $post->post_title = $request->post_title;
                $post->post_content = $request->post_content;
                $post->featured_image = $new_filename;
                $saved = $post->save();

                if ($saved) {
                    return response()->json(['code' => 1, 'msg' => 'Succesvol gepost']);
                } else {
                    return response()->json(['code' => 3, 'msg' => 'Er is iets fout gegaan.']);
                }
            } else {
                return response()->json(['code' => 3, 'msg' => 'Fout bij het uploaden van een nieuwe afbeelding.']);
            };
        } else {
            $request->validate([
                'post_title' => 'required|unique:posts,post_title,' . $request->post_id,
                'post_content' => 'required',
            ]);

            $post = Post::find($request->post_id);
            $post->post_content = $request->post_content;
            $post->post_title = $request->post_title;

            $saved = $post->save();
            if ($saved) {
                return response()->json(['code' => 1, 'msg' => 'Het blog is succesvol geplaatst.']);
            } else {
                return response()->json(['code' => 3, 'msg' => 'Er is iets misgegaan bij het updaten van het bericht.']);
            };
        }
    }
    public function deletePost($id)
    {
        $post = Post::find($id);

        if ($post) {
            // Perform any other necessary cleanup, e.g., delete associated images
            $post->delete();

            return redirect()->route('posts.all_posts')->with('success', 'Post verwijderd');
        } else {
            return redirect()->route('posts.all_posts')->with('error', 'Post niet gevonden');
        }
    }
}
