<?php

namespace Proj\Controllers;

use Proj\Core\App;

class UsersController
{
    public function index()
    {
        $names = App::get('database')->fetchAll('users');

        return view('users', compact('names'));
    }

    public function store()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);
        
        return redirect('users');
    }
}