<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function index()
    {
        return <<<php
        <h1>Hello admin!</h1>
        <p>Какие-то аналитические данные, на которые админу вообще безразницы</p>
        <a href='/'>идем на главную</a>
        php;
    }

    public function test1()
    {
        return <<<php
        <h1>Тест 1</h1>
        php;
    }

    public function test2()
    {
        return <<<php
        <h1>Тест 2</h1>
        php;
    }
}
