<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sisven extends Model
{
    use HasFactory;
    protected $table = 'sisven';
    public $primaryKey = 'id';
    public $timestamps = 'false';

}