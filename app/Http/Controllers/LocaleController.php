<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function index(Request $request)
    {
        \Session::put('language', $request->get('locale', 'en'));
        \App::setLocale($request->get('locale', 'en'));

        return \Redirect::back();
    }
}
