<?php

namespace App\Models;

use App\Traits\Eloquents\PermissionTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Permission extends Model
{
    use HasFactory, SoftDeletes, PermissionTrait;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='permissions';


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
        'permission',
    ];

    /**
     * Get the permission's name.
     * 
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value){
        return Str::upper(Str::replace('\\',' ',$value)); // Converts permission's name to uppercase
    }


    /**
     * Set the permission's name.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = addslashes($value); // Escape value with backslashes
    }


    /**
     * Get the permission's permission.
     *
     * @param  string  $value
     * @return string
     */
    public function getPermissionAttribute($value){
        return Str::lower(Str::replace('\\',' ',$value)); // Converts permission's permission to lower
    }

    /**
     * Set the permission's permission.
     *
     * @param  string  $value
     * @return void
     */
    public function setPermissionAttribute($value)
    {
        $this->attributes['permission'] = addslashes($value); // Escape value with backslashes
    }
}
