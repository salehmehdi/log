<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authors;

class Authorscontroller extends Controller
{
    public function index () {
    

   return "hello world";

    }
    public function created (){
        Authors::create([
            "author"=>"aghalarov",
            "article"=>"front-end gelecegi",
            "status"=>1,
            
        ]);
    }

    public function guncelle(){
        Authors::whereId(8)->update([
            "status"=>0,
        ]);
        /*ilk basta status 0 olanlari guncelleme yaptim yanlislikla o yuzden bu sekilde bir kacini id ye gore tekrar 0 yaptim */
    }
    public function list()
    {
        $lists = Authors::where('status', 1)->get();
        foreach ($lists as $list) {
            echo $list->article. '<br>';
        }
         /*burada sadece statusu 1 olanlari listeleyip yazdirdim */
    }

    public function status_guncelle(){
        Authors::whereStatus(0)->update([
            "status"=>1,
        ]);
          /*burada satusu 0 olanlari 1 yaptim*/
    }
     public function deleted(){
        Authors:: whereId(10)->delete();
     }
     /* burada id ye gore silme islemi yaptim ve id si 10 olan veriyi sildim */
     public function order_list(){
     $articles=Authors::orderBy('created_at','desc')->get();
     dd($articles);
     foreach ($articles as $article) {
        echo $article->article . '<br>';
    }
 }

 public function getAuthors(Request $request)
    {
        $author = $request->get('author');
        $article = $request->get('article');

        if ($author && $article) {
            echo $author . ' ' . $article;
        } 
    }
}
