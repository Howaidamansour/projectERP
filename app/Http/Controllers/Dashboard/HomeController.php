<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function localization ($local) {
// dd($local);
        app()->setLocale($local);
        session()->put('locale', $local);
        return back();

    }
}
