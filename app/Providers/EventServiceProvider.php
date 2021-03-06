<?php

namespace App\Providers;

use App\Events\ActivityEvent;
use App\Listeners\RecentActivityListener;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Setting;
use App\Observers\PermissionObserver;
use App\Observers\RoleObserver;
use App\Observers\SettingObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ActivityEvent::class => [
            RecentActivityListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Permission::observe(PermissionObserver::class);
        Role::observe(RoleObserver::class);
        Setting::observe(SettingObserver::class);

    }
}
