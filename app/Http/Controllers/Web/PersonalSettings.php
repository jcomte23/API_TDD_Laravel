<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalSettings extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function products()
    {
        return view('products.guest');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function setLang(string $locale)
    {
        return redirect()->back()->withCookie('locale', $locale);
    }
}
