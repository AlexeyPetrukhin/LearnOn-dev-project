<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function signIn() {
        //Решить проблему при отсутсвии записей в БД
        $posts = DB::table('blog_posts')->get();
        return view('sign-in',compact('posts'));
    }
}
