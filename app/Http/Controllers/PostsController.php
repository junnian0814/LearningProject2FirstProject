<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $id = 2;

        // $posts = DB::table('posts')
        //     ->where('id', $id)
        //     ->get();

        //Only select all of the body column
        // $posts = DB::table('posts')
        //     ->select('body')
        //     ->get();

        //Select by time
        // $posts = DB::table('posts')
        //     ->where('created_at', '>', now()->subDay())
        //     ->orWhere('title', 'Prof.')
        //     ->get();

        //Select id between
        // $posts = DB::table('posts')
        //     ->whereBetween('id', [2,9])
        //     ->get();

        //Select distinct posts order by title in accending ascending
        // $posts = DB::table('posts')
        //     ->orderBy('title', 'asc')
        //     ->distinct()
        //     ->get();

        //Can change latest to oldest
        // $posts = DB::table('posts')
        //     ->latest()
        //     ->get();        

        //Select the first one of the post order by the latest
        // $posts = DB::table('posts')
        //     ->orderBy('created_at', 'desc')
        //     ->first(); 

        //Find
        // $posts = DB::table('posts')
        //     ->find($id);

        $posts = DB::table('posts')
            ->where('id', $id)
            ->count();
        
        //$posts = DB::select('select * from posts where id = ?', [2]);

        dd($posts);
    }
}
