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
        $comic = [];
        foreach ($comics as $item) {
            if ($id == $item['id']){
                $comic = $item;
            }
        }
        // dd($comic);
     }
}
