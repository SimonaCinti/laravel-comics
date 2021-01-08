<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Detail page for comic item
     */

     public function show($id) {

         $comics = config('comics');
        //  dd($comics);
        
        /**
         * Get specific comic by ID
         */

        

        /* Metodo if */
        // $comic = [];
        // foreach ($comics as $item) {
        //     if ($id == $item['id']){
        //         $comic = $item;
        //     }
        // }

        /* Metodo firstWhere */
        $comic = collect($comics)->firstWhere('id', $id); //! push primo elemento con chiave 'id' == $id

        // dd($comic);
        return view('comics.show', compact('comic'));
     }
}
