<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function signIn() {
        $model = new BlogPost();
        $model->all();
    }
}
