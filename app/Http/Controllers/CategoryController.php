<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{   
    //tìm thể loại có số bài viết nhiều nhất 
    public function getCategoryHaveMostPost(){
       $id = DB::table('baiviet')
                    ->select('ma_tloai')
                    ->groupBy('ma_tloai')
                    ->orderByRaw('COUNT(*) DESC')
                    ->pluck('ma_tloai')
                    ->first();
    
        // dd($id);
        $categories = DB::table('theloai')
                    ->select('ten_tloai')
                    ->where('ma_tloai', '=', $id)
                    ->get();        

     return view('category', compact('categories'));
    }
}
