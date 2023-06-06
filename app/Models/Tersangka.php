<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tersangka extends Model
{
    use HasFactory;
    protected $table = 'tersangka';
    protected $guarded = ['id'];
    public $timestamps = false;
}
