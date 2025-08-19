<?php

namespace App\Controllers;

class Home extends BaseController
{
<<<<<<< HEAD
    public function index(): string
    {
        return view('template');
=======
    public function index()
    {
        return view('welcome_message'); // default CI4 welcome view
>>>>>>> f69d1ecc667fa858b3ff951ed491fe09fae783e2
    }
}
