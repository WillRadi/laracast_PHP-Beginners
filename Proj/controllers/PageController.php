<?php

namespace Proj\Controllers;

use Proj\Core\App;

class PageController
{
    public function home()
    {
        $tasks = App::get('database')->fetchAll('todos');

        /**
         * limpando o require "views/index.view.php";
         * array deve ser passado para que o index "veja" a variável
         */
        return view('index', ['tasks' => $tasks]);
    }

    public function culture()
    {
        $nacionality = 'Brasilian';
        return view('culture', ['nacionality' => $nacionality]);
    }

    public function contact()
    {
        return view('contact');
    }
}