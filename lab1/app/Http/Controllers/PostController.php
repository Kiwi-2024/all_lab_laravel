<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function xemnhieu(){
        $data = Post::select('id', 'title', 'views')
        ->orderBy('views', 'desc')
        ->take(10)->get();
        return view('xemnhieu', ['data' => $data]);
    }
    public function chitiet($id){
        $data = Post::find($id);
        return view('chitiettin', ['data' => $data]);
    }
}
