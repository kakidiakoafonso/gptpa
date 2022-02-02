<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteTpa extends Model
{
    use HasFactory;
    protected $fillable = ["cliente_id","tpa_id"];

    public function cliente() {
        return $this->belongsTo(cliente::class,"cliente_id","id");
    }
    public function tpa() {
        return $this->belongsTo(Tpa::class,"tpa_id","id");
    }
}
