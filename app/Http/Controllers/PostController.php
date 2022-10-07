<?php

namespace App\Http\Controllers;

use App\forms\PostForm;
use App\Models\form;
use App\Models\Post;
use Illuminate\Http\Request;
use  Kris\LaravelFormBuilder\FormBuilder;

class PostController extends Controller
{
    private $formBuilder;

    public function __construct(FormBuilder $formBuilder)
    {
        $this->formBuilder = $formBuilder;
    }


    public function create(FormBuilder $formBuilder)
    {


        $inputs = form::all()->toArray();
        $form = $this->formBuilder->create(PostForm::class , [],$inputs );

        return view('posts.create', compact('form', 'inputs'));
    }


    public function store(FormBuilder $formBuilder , Request $request)
    {
        $form = $this->formBuilder->create(PostForm::class);
        $form->redirectIfNotValid();
        $data = $request->all();
        unset($data["_token"]);


        $post = new Post();
        $post->content = $data;
        $post->save();
        return $post;
    }



}
