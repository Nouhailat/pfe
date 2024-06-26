<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'first_name', 'email', 'phone', 'photo', 'description'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
