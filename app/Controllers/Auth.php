<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        echo view('auth/login');
    }
    public function daftar()
    {
        echo view('auth/daftar');
    }
}
