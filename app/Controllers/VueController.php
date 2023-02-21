<?php

namespace App\Controllers;

class VueController extends BaseController
{
    public function showExample()
    {
        return view('vue_example');
    }
}