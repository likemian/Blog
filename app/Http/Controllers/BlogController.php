<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 查询数据，并让查询结果是一个可分页的对象
        $titles = Blog::orderBy('created_at', 'desc')->get(['id', 'title']);
        $blog = Blog::orderBy('created_at', 'desc')->first();

        return view('blog.index', ['titles' => $titles, 'blog' => $blog]);
    }
}
