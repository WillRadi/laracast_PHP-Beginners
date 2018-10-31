<?php

class PageController
{
    public function home()
    {
        $tasks = App::get('database')->fetchAll('todos');
        $names = App::get('database')->fetchAll('users');

        /**
         * limpando o require "views/index.view.php";
         * array deve ser passado para que o index "veja" a variável
         */
        return view('index', ['names' => $names, 'tasks' => $tasks]);
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

    public function addName()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);
        
        return view('index');
    }
}