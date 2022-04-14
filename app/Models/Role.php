<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Traits\Eloquents\RoleTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use RoleTrait, HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='roles';


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey='id';


    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * Indicates if the model should be softdeleted.
     *
     * @var bool
     */
    protected $softDelete = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'role',
    ];

    /**
     * Get the role's name.
     * 
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value){
        return Str::upper(Str::replace('\\',' ',$value)); // Converts role's name to uppercase
    }


    /**
     * Set the role's name.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = addslashes($value); // Escape value with backslashes
    }


    /**
     * Get the role's role.
     *
     * @param  string  $value
     * @return string
     */
    public function getRoleAttribute($value){
        return Str::lower(Str::replace('\\',' ',$value)); // Converts role's role to lower
    }

    /**
     * Set the role's role.
     *
     * @param  string  $value
     * @return void
     */
    public function setRoleAttribute($value)
    {
        $this->attributes['role'] = addslashes($value); // Escape value with backslashes
    }
}
