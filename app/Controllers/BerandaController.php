<?php

namespace App\Controllers;

class BerandaController extends BaseController
{
    public function index(): string
    {
        return view('beranda');
    }
}
