<?php


namespace App\Http\Controllers;


use App\Models\Article;

class TestController
{

    protected function myDump($var)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }


    public function index()
    {







/*        $item = new Article();
        $item->title = 'Четвертая статья';
        $item->content = 'Еще одна новость';
        $item->save();*/




/*        $items = Article::all();
        foreach($items as $item) {
            $this->myDump($item->id);
        }*/


        die;

//        return 'Hello!';
        return view('test', [
            'names' => ['Vasya', 'Petya', 'Kate']
        ]);
    }
}