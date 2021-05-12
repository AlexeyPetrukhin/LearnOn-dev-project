<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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

    public function newPasswordPage() {

        return view('new-password');
    }

    public function successRequestPage() {
        return view('success-request');
    }

    // ! Перенести метод в контроллер User
    public function sendMessage(Request $request) {
        $data = $request->input('email');
        $user = DB::table('users');
        dd($request);
        return view('send-letter');
    }

}
