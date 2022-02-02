<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpa extends Model
{
    use HasFactory;
    protected $fillable = [ "idPos","descricao","marca","modelo","cor","numero_serie",
    "estado"];
    public function cliente() {
        return $this->hasMany(ClienteTpa::class,"tpa_id");
    }
}
