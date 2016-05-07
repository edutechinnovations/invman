<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // User events
        'App\Events\UserSignedUp' => [
            'App\Listeners\HandleUserSignedUp',
        ],
        'App\Events\UserLoggedIn' => [
            'App\Listeners\HandleUserLoggedIn',
        ],
        'App\Events\UserSettingsChanged' => [
            'App\Listeners\HandleUserSettingsChanged',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
