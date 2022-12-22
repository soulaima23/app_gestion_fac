<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'specialitee', 'contrat', 'address	', 'city'];
public function types(){
    $this->belongsTo(Types::class);
}
}
