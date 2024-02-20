<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    public function grades(){
        return $this->belongsTo(Grade::class, 'kelas');
    }


    use HasFactory;

    protected $guarded = ['id']; // Change 'guard' to 'guarded'

    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'tanggal_lahir',
        'alamat',

    ];
}
