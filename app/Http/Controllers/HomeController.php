<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index() {
        // return 'HOMEPAGE';

        // Get comic list
        $comics = config('comics');
        // dd($comics);

        /**
         * Slug for comics
         */

        foreach ($comics as $key => $comic) {
            $slug = Str::slug($comic['title'], '-'); //! comando per lo slug
            $comics[$key]['slug'] = $slug; //! aggiunta al db nuova key slug
        }
        // dd($comics);
        return view('home', compact('comics'));
    }
}
