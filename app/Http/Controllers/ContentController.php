<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Content;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
    
    }

    public function store(Request $request){
        $result = Content::create([
            'title' => $request->title,
            'text' => $request->text
        ]);
    }

    
}
