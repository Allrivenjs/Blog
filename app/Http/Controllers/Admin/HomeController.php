<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;


class HomeController extends Controller
{
     public function index(){





        $post= Post::where('user_id', auth()->user()->id)
        ->latest('id')
        ->get();

        return view('admin.index', compact('post'));

    }
}
