<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;


    protected $connection = 'mysql';
    protected $table = 'Pais';
    public $timestamps = false;
}
