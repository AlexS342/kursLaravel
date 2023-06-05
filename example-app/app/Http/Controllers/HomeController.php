<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return <<<php
        <h1>Hello user!</h1>
        <p>Какой-то текст, имеющий особое значение для пользователя</p>
        <a href='/news'>Новости</a>
        <hr>
        <a href='/admin'>идем в админку</a>
        php;
    }
}
