<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ComicController extends Controller
{
    /**
     * Detail page for comic item
     */

    public function show($slug) {

        $comics = config('comics');
        $comic = [];
        // Decision
        foreach ($comics as $item) {
            //title to slag 
            $titleConverted = Str::slug($item['title'], '-');

            // Decision
            if ($slug == $titleConverted){
                $comic = $item;
            }
        }

        /**
        * Metodo firstWhere
        */

        // $comic = collect($comics)->firstWhere('id', $id); //! push primo elemento con chiave id

        /**
         * Error 404 
        */
        if (empty($comic)){
            abort(404);
        }

        /**
         * Return
        */

        // dd($comic);
        return view('comics.show', compact('comic'));
    }
}
