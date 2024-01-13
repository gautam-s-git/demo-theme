<?php

namespace Archangel\Packages\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoadThemeController extends Controller
{

    public function list()
    {
        return view('Theme::index');
    }

    public function storeTheme(Request $request)
    {
        return view('Theme::store');
    }
}
