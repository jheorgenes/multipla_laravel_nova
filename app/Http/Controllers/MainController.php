<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function nova_pagina(): View
    {
        return view('nova_pagina');
    }

    public function testes(Request $request)
    {
        $id = auth()->user()->id;

        $username = auth()->user()->email;
        echo $username;
    }

    public function nova_pagina_publica()
    {
        return view('nova_pagina_publica');
    }
}
