<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;

class FormController extends Controller
{
        public function index(){
            $forms=form::all();
            return view ('forms.index',compact('forms'));
        }
        public function create(){
            return view('forms.create');
        }
        public function store(Request $request){
            $form = form::create([
                'title' => $request['title'],
                'name' => $request['name'],
                'type' => $request['type'],
                'rules' => $request['rules'],

            ]);
            return redirect()->route('forms.index');


        }
}
