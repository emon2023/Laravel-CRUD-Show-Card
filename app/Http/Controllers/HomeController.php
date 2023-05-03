<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $blog, $blogs;
    public  function index()
    {
        $this->blogs = Blog::all();
        return view('view.home',['blogs'=> $this->blogs]);
    }

    public function detail($id)
    {
        $this->blog = Blog::find($id);
        return view('view.detail',['blog'=>$this->blog]);
    }
}
