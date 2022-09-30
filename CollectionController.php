<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        dump($collection);

    }

    public function collectionDua()
    {
        $varA = collect([1,2,3]);
        $varB = collect(["0"=>1, "1"=>2, "2"=>3]);

        echo $varA; // [1,2,3]
        echo "<br>";
        echo $varB; // [1,2,3]

    }

    public function collectionTiga()
    {
        //... isi method collectionTiga
    }

    public function collectionEmpat()
    {
        //... isi method collectionEmpat
    }

    public function collectionLima()
    {
        //... isi method collectionLima
    }
    public function collectionEnam()
    {
        //... isi method collectionEnam
    }
}
