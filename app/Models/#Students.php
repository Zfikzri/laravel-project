<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students
{
    private static $students = 
    //pindahkan array dari route ke sini
    [
        [
            "id" => 1,
            "nis" => 101,
            "nama" => "Arya",
            "kelas" => "11 PPLG 1",
            "alamat" => "Kudus"
        ],
        [
            "id" => 2,
            "nis" => 102,
            "nama" => "Filemon",
            "kelas" => "11 PPLG 1",
            "alamat" => "Malang"
        ],
        [
            "id" => 3,
            "nis" => 103,
            "nama" => "Pandu",
            "kelas" => "11 PPLG 1",
            "alamat" => "Kandangmas"
        ],
        [
            "id" => 4,
            "nis" => 104,
            "nama" => "Fuad",
            "kelas" => "11 PPLG 1",
            "alamat" => "Kandangmas"
        ],
        [
            "id" => 5,
            "nis" => 105,
            "nama" => "Ilham",
            "kelas" => "11 PPLG 1",
            "alamat" => "Bangsri"
        ]
    ];
    public static function all(){
        return self::$students;
    }
}
