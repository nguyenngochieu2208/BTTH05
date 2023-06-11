<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{

    // liệt kê các bài viết thuộc thể loại nhạc: error
    public function getPostbyCategory(){
        $posts = DB::table('theloai')
            ->join('baiviet', 'theloai.ma_tloai', '=', 'baiviet.ma_tloai')
            ->select('baiviet.*')
            ->where('ten_tloai', '=', 'error')
            ->get();

        // dd($posts);

        return view('post', compact('posts'));
    }

    //liệt kê các bài viết của tác giả: Miss Elise Orn
    public function getPostbyAuthor(){
        $posts = DB::table('tacgia')
            ->join('baiviet', 'tacgia.ma_tgia', '=', 'baiviet.ma_tgia')
            ->select('baiviet.*')
            ->where('ten_tgia', '=', 'Miss Elise Orn')
            ->get();

        // dd($posts);

        return view('post', compact('posts'));
    }
}
