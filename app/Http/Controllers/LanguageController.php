<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request, $locale)
    {
        \Session::put('locale', $locale);

        return redirect()->back();
    }
}
