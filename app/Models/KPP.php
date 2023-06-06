<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KPP extends Model
{
    use HasFactory;
    protected $table = 'kpp';
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
