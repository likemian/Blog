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
    public function index($id = null)
    {
        // 查询数据，并让查询结果是一个可分页的对象
        $titles = Blog::orderBy('created_at', 'desc')->get(['id', 'title']);
        if (is_null($id)) {
            $blog = Blog::orderBy('created_at', 'desc')->first();
        } else {
            $blog = Blog::find($id);
        }

        return view('blog.index', ['titles' => $titles, 'blog' => $blog]);
    }
}
