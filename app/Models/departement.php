<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    use HasFactory;
    protected $fillable = ["name"];

    public function student(){
        return $this->hasMany(Student::class);
    }
}
