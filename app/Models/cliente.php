<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $fillable = ["nome","data_criacao"];

    public function endereco() {
        return $this->hasOne(endereco::class,"user_id");
    }
}
