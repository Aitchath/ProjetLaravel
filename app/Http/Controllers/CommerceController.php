<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommerceController extends Controller
{
    public function index(){


        return view('accueil');
    }

    public function ajout(){

        if (! Gate::allows('access-admin')) {
            abort(403);
        }

        return view('ajout');
    }

    public function projet(){

        return view('projet');
    }
}
