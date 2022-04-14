<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Enums\Env;

class Setting extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var integer
     */
    protected $keyType = 'integer';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The storage format of the model's date columns.
     * 
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'enterprise_name', 'description', 'enterprise_activities',
        'logo','website_name','website_link','website_mode','updated_by','env','lang',
        'files_key','app_key','social_medias_link','email_contact_data','phone_contact_data','env'
    ];

    /**
     * The attributes that are not mass-assignable
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'enterprise_name', 'description', 'enterprise_activities',
        'logo','website_name','website_link','website_mode','updated_by','env','lang',
        'files_key','app_key','social_medias_link','email_contact_data','phone_contact_data'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime:Y-m-d H:i:s',
        'deleted_at' => 'datetime:Y-m-d H:i:s',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'email_contact_data' => 'array',
        'phone_contact_data' => 'array',
        'email_contact_data' => 'array',
    ];
    
    // protected $guard = ['files_key', 'app_key', 'env', 'lang', 'website_mode', 'updated_by'];

    /**
     * Get the enterprise name.
     * 
     * @param  string  $value
     * 
     * @return string
     */
    public function getEnterpriseNameAttribute($value){
        return Str::upper(Str::replace('\\',' ',$value)); // Converts enterprise name to uppercase
    }

    /**
     * Set the enterprise name.
     *
     * @param  string  $value
     * @return void
     */
    public function setEnterpriseNameAttribute($value)
    {
        $this->attributes['enterprise_name'] = addslashes($value); // Escape value with backslashes
    }

    /**
     * Get the website name.
     * 
     * @param  string  $value
     * @return string
     */
    public function getWebsiteNameAttribute($value){
        return Str::upper(Str::replace('\\',' ',$value)); // Converts website name to uppercase
    }

    /**
     * Set the website name.
     *
     * @param  string  $value
     * @return void
     */
    public function setWebsiteNameAttribute($value)
    {
        $this->attributes['website_name'] = addslashes($value); // Escape value with backslashes
    }


    /**
     * Get the description.
     * 
     * @param  string  $value
     * @return string
     */
    public function getDescriptioneAttribute($value){
        return Str::upper(Str::replace('\\',' ',$value)); // Converts description to uppercase
    }

    /**
     * Set the description.
     *
     * @param  string  $value
     * @return void
     */
    public function setDescriptioneAttribute($value)
    {
        $this->attributes['description'] = addslashes($value); // Escape value with backslashes
    }


}
