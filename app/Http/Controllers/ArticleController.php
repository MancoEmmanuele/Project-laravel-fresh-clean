<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;

class ArticleController extends Controller
{
    public function create(){
        return view("article.create");
    }
    public function store(Request $request){
    //    dd($request->all());
    Article::create([
        "name"=>$request->input("name"),
        "brand"=>$request->input("brand"),
        "price"=>$request->input("price"),
        "img"=>$request->file("img")->store("cover","public")


    ]);
    return redirect(route("home"))->with("message", "You have added your article successfully!!");
    }
}
