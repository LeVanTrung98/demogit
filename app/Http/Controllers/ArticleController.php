<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Category;
class ArticleController extends Controller
{

    public function ClickHere($id){
        $list = Category::find($id);
        return  redirect()->route('showCreate.Article')->with('list');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Article::all();
        return view('article.index',compact('list'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = Category::all();
        return view('article.create',compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token','submit');
        Article::create($data);
        return redirect()->route('list.Article');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $list = Article::find($id);
       $listC =Category::all();
       return view('article.edit',compact('list','listC'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $data = $request->except('_token','_method');
       $cate =Article::find($id);
       $cate->update($data);
       return redirect()->route('list.Article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article,$id)
    {
        $id = Article::find($id);
        $id->delete();
        return redirect()->route('list.Article');
    }
}
