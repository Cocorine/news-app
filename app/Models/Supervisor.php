<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supervisor extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the supervisor's user profil.
     */
    public function profil()
    {
        return $this->morphOne(User::class, 'profils');
    }
}
