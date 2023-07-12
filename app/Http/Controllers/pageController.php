<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function homePage()
    {
        return view('pages.homePage');
    }

    public function singlePage($id)
    {
        // Retrieve the post by ID
        $post = Post::find($id);
    
        if ($post) {
            // Pass the post data to the view
            return view('pages.singlePage', ['post' => $post]);
        } else {
            // Handle the case where the post is not found
            abort(404);
        }
    }

    function comment() {
        
    }
    

}
