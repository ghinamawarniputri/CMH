<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function changeLanguage($lang)
    {
        if (in_array($lang, ['id', 'en', 'su'])) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        }

        return redirect()->back();
    }
}
