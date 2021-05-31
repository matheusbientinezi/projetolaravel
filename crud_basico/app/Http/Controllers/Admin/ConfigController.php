<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

