<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index()
    {
        echo view('admin/acara/get');
    }
}