<?php

namespace App\Http\Traits\GestionHello;

use Illuminate\Http\Request;

use ErrorException as ExcepcionErrorCode;

trait TraitGestionHello {

    public function hello(Request $request) {

        return view('hello');
    }
}

