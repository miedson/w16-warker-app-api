<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posto extends Model
{
    use HasFactory;

    /**relacionameto "pertece a" com classe Cidade*/
    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }
}
