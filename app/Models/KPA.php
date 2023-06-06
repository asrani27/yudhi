<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KPA extends Model
{
    use HasFactory;
    protected $table = 'kpa';
    protected $guarded = ['id'];
    public function penyidik()
    {
        return $this->belongsTo(Penyidik::class, 'penyidik_id');
    }

    public function korban()
    {
        return $this->belongsTo(Korban::class, 'korban_id');
    }

    public function tersangka()
    {
        return $this->belongsTo(Tersangka::class, 'tersangka_id');
    }
}
