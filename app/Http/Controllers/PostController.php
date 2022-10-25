<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function postList()
    {
        $posts = DB::table('tests')->get();
        return view('post-list',compact('posts'));
    }
    public function savePost(Request $request)
    {
        DB::table('tests')->insert([
            'check1'=>$request->check1,
            'check2'=>$request->check2,
            'check3'=>$request->check3,
            'check4'=>$request->check4,
            'honap'=>$request->honap,
            'megjegyzes'=>$request->megjegyzes
        ]);
        return back()->with('post-list','Sikeres!');
    }

    public function editPost($id)
    {
        $post = DB::table('tests')->where('id', $id)->first();
        return view('edit-post', compact('post'));

    }
    public function updatePost(Request $request)
    {
        DB::table('tests')->where('id', $request->id)->update([
            'check1'=>$request->check1,
            'check2'=>$request->check2,
            'check3'=>$request->check3,
            'check4'=>$request->check4,
            'honap'=>$request->honap,
            'megjegyzes'=>$request->megjegyzes
        ]);
        return back()->with('post_update', 'Sikeresen frissítve');
    }
    public function deletePost($id)
    {
        DB::table('tests')->where('id',$id)->delete();
        return back()->with('post_delete','Sikeresen Törölve!');
    }
}
