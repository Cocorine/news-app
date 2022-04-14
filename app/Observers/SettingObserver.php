<?php

namespace App\Observers;
use Illuminate\Support\Str;

use App\Models\Setting;

class SettingObserver
{
    
    /**
     * Handle the Setting "creating" event.
     *
     * @param  \App\Models\Setting  $setting
     * @return void
     */
    public function creating(Setting $setting)
    {
        $setting->app_key = Str::replace(' ', '-',Str::lower($setting->website_name));
        $setting->logo = $setting->app_key . '/' . $setting->files_key . '/' . $setting->logo;
        $setting->website_link = $setting['env']['url'];
        
    }

    /**
     * Handle the Setting "created" event.
     *
     * @param  \App\Models\Setting  $setting
     * @return void
     */
    public function created(Setting $setting)
    {
        //
    }

    /**
     * Handle the Setting "updated" event.
     *
     * @param  \App\Models\Setting  $setting
     * @return void
     */
    public function updated(Setting $setting)
    {
        //
    }

    /**
     * Handle the Setting "deleted" event.
     *
     * @param  \App\Models\Setting  $setting
     * @return void
     */
    public function deleted(Setting $setting)
    {
        //
    }

    /**
     * Handle the Setting "restored" event.
     *
     * @param  \App\Models\Setting  $setting
     * @return void
     */
    public function restored(Setting $setting)
    {
        //
    }

    /**
     * Handle the Setting "force deleted" event.
     *
     * @param  \App\Models\Setting  $setting
     * @return void
     */
    public function forceDeleted(Setting $setting)
    {
        //
    }
}
