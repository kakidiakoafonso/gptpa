<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
    use HasFactory;
    protected $fillable = ["endereco","municipio","provincia","user_id"];

    public function endereco() {
        return $this->belongsTo(cliente::class,"user_id");
    }
}
