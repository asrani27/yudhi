<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jaksa extends Model
{
    use HasFactory;
    protected $table = 'jaksa';
    protected $guarded = ['id'];
    public $timestamps = false;
}
