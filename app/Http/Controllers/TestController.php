<?php


namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Rubric;
use App\Services\HelloService;

class TestController
{

    protected function myDump($var)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        die;
    }


    public function index(HelloService $hello)
    {

//        $hello = app()->make(HelloService::class);
        $this->myDump($hello->getMessage());














/*        $data = Article::all();

        $this->myDump($data[0]->rubrics);*/








/*        $data = Rubric::all();


        $this->myDump($data);*/










/*        $data = (new Article())->newQuery()->get();

        $data = $data->reject(function ($x) {
            return is_null($x->created_at);
        });*/












//        foreach($data as $key => $val) {
//            echo $val->title;
//        }




//        $data = Article::where('id', 1)->get();
//        $this->myDump($data);


/*        $item = new Article();
        $item->title = 'Четвертая статья';
        $item->content = 'Еще одна новость';
        $item->save();*/




/*        $items = Article::all();
        foreach($items as $item) {
            $this->myDump($item->id);
        }*/


//        die;

//        return 'Hello!';
//        return view('test', [
//            'names' => ['Vasya', 'Petya', 'Kate']
//        ]);
    }
}