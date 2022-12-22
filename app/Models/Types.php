<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;

    protected $fillable = ['fullname'];
    public function teacher(){
        return $this->hasMany(Teacher::class);
    }
}
