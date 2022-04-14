<?php

namespace App\Traits\Eloquents;

trait UserTrait{

    use HasPermissionTrait;
    
    public function role() {

        return $this->roles->wherePivot('status', true)->first();
    }

    /**
     * Get the parent profils model (informer or subscriber or partner or supervisor or editor).
     */
    public function profils()
    {
        return $this->morphTo();
    }

    /**
     *
     *  BEGIN OF ELOQUENT FUNCTIONS SECTION
     */

    /**
     *
     *  END OF ELOQUENT SECTION
     */


    /**
     *
     *  BEGIN OF SCOPE FUNCTIONS SECTION
     */

    /**
     * Find user by attribute.
     *
     * @param  Builder  $query
     * @param  string  $attribute
     * @param  string  $value
     * @return \App\Models\User
     */
    public function scopeFilterQuery($query,$attribute, $value)
    {
        return $query->where($attribute, $value)->get();
    }

    /**
     *
     *  END OF SCOPE SECTION
     */


    /**
     *
     *  BEGIN OF QUERIES FUNCTIONS SECTION
     */

    /**
     * Find the user instance for the given username.
     *
     * @param  string  $username
     * @return \App\Models\User
     */
    public function findForPassport($username)
    {
        return $this->where('username', $username)->first();
    }


     /**
     *
     *  END OF QUERIES SECTION
     */
    
}
