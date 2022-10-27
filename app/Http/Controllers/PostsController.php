<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() {
        //return view('posts.index');
        $posts = DB::table("posts")
                // ->insert([
                //     'title' => 'haha',
                //     'body'  => 'I love Nghia'
                // ]);
                // ->where("id",'=',2)
                // ->delete();
                //->update([
                //     'title' => 'Trang'
                // ]);
                // ->select('body')
                //->oldest()
                //->count();
                //->max('id');
                //->sum('id');
                ->get();
        dd($posts);
    }
}
