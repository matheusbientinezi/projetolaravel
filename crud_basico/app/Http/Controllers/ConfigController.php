<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        return view('config.config');
    }

    public function info()
    {
        return view('config.info');
    }

    public function permissoes()
    {
        return view('config.permissoes');
    }
}

