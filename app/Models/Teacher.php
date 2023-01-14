<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $fillable = ["name","registration_number","mail","phone","address","type_id"];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
