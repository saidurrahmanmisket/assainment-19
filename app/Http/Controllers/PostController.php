<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    function allPosts()  {
        return  Post::get();
      }
    function comment(Request $request)  {
        return  Comment::create($request->Input());
      }

     
      function allComments() {
          return Comment::get();
      }
      function firstComment() {
          return Comment::first();
      }
}
