<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function students(){
        return $this->hasMany(Student::class);
    }

    protected $table = 'grade';

    use HasFactory;
    protected $fillable = [
        'Nama',
        'created_at',
        'updated_at'
    ];
}