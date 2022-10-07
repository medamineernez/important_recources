<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class FileUploadController extends Controller
{

    public function index(){

        $posts =Post::all();
        return view ('pdf',compact('posts'));
    }
    public function fileUpload()
    {
        return view('fileUpload');
    }


    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            'title'=>'required|numeric'
        ]);

    $file =request()->file('file')->getClientOriginalName();
    request()->file('file')->storeAs('files'.'/'.$file,'');

        $post = Post::create([
            'title' => $request['title'],
            'file' => $file ,

        ]);
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',);

    }
}
