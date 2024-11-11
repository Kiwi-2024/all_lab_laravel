<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function xemnhieu()
    {
       $data = Post::select('id', 'title', 'views')->orderBy('views', 'desc')->take(10)->get();
       return view('xemnhieu', ['data' => $data]);
    }
    public function chiTiet($id)
    {
       $data = Post::find($id);
       return view('chitiettin', ['data' => $data]);
    }
}
