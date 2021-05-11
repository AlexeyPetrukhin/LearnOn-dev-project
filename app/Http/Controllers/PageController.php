<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function signInPage() {
        $posts = DB::table('blog_posts')->get();
        $countPosts = $posts->count();
        return view('sign-in',compact('posts','countPosts'));
    }

    public function recoveryPage() {

        return view('recovery');
    }

    public function sendLetterPage() {

        return view('send-letter');
    }

    public function newPassword(){

        return view('new-password');
    }
}
