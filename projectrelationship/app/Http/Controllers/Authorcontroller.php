<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Article;
use App\Models\Comment;

class Authorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::get()->toArray();
        //dd($authors);

        $data = [];

        foreach ($authors as $author) 
        {
            $authorData = $author;
            $authorArticles = [];


            $articles = Article::where('author_id', $author['id'])->get()->toArray();
            if ($articles) 
            {
                foreach ($articles as $article)
                {
                    $articleData = $article;

                    // Makaleye ait yorumları alalım ve $comments dizisine ekleyelim
                    $articleComments = Comment::where('article_id', $article['id'])->get()->toArray();
                    $articleData['comments'] = $articleComments;

                    $authorArticles[] = $articleData;
                }
            }


            $authorData['articles'] = $authorArticles;
            $data[] = $authorData;
        }

    
        return view('authors',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=[]; 
        return view('authors',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
