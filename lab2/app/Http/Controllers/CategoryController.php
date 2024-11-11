<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function category()
    {
       $data = DB::table('categories')->select('id', 'name', 'description')->orderBy('id', 'desc')->take(10)->get();
       return view('categories', ['data' => $data]);
    }
    public function listpost($id)
    {
       $data = DB::table('posts')
       ->join('categories', 'posts.category_id', '=', 'categories.id')
       ->where('categories.id', $id)
       ->select('posts.id', 'posts.title', 'posts.content', 'posts.views', 'categories.name')
       ->orderByDesc('posts.id')
       ->get();
       return view('listpost', ['data' => $data]);
    }
}
