<?php

namespace App\Http\Traits\GestionHome;

use Illuminate\Http\Request;

use ErrorException as ExcepcionErrorCode;

trait TraitGestionHome {

    public function hello(Request $request) {

        return view('welcome');
    }
}

