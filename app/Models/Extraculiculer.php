<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extraculiculer 
{
    private static $extra = 
    //pindahkan array dari route ke sini
    [
        [
            "id" => 1,
            "nama" => "Sepak Bola",
            "pembina" => "Aan Kurniawan",
            "deskripsi" => "Extrakulikuler Sepak Bola"
        ],
        [
            "id" => 2,
            "nama" => "Basket",
            "pembina" => "Wygsn",
            "deskripsi" => "Extrakulikuler Basket"
        ],
        [
            "id" => 3,
            "nama" => "Futsal",
            "pembina" => "Altan Assyfa",
            "deskripsi" => "Extrakulikuler Futsal"
        ],
        [
            "id" => 4,
            "nama" => "Badminton",
            "pembina" => "Pandus",
            "deskripsi" => "Extrakulikuler Badminton"
        ],
        [
            "id" => 5,
            "nama" => "Hiking",
            "pembina" => "Filemon Diwangkara",
            "deskripsi" => "Extrakulikuler Hiking"
        ]
    ];
    public static function all(){
        return self::$extra;
    }
}
