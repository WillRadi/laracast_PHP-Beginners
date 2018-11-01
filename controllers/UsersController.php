<?php

class UsersController
{
    public function index()
    {
        $names = App::get('database')->fetchAll('users');

        /**
         * compact('names') == ['names' => $names]
         */
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