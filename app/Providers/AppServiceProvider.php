<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Spatie\Health\Checks\Checks\CacheCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\HorizonCheck;
use Spatie\Health\Checks\Checks\QueueCheck;
use Spatie\Health\Checks\Checks\RedisCheck;
use Spatie\Health\Checks\Checks\ScheduleCheck;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
use Spatie\Health\Facades\Health;
use Spatie\SecurityAdvisoriesHealthCheck\SecurityAdvisoriesCheck;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // typically, in a service provider
        Health::checks([
            DatabaseCheck::new(),
            // EnvironmentCheck::new(),
            ScheduleCheck::new()->heartbeatMaxAgeInMinutes(5),
            RedisCheck::new(),
            CacheCheck::new(),
            UsedDiskSpaceCheck::new()
                ->warnWhenUsedSpaceIsAbovePercentage(90)
                ->failWhenUsedSpaceIsAbovePercentage(95),
            QueueCheck::new()
                ->everyFiveMinutes()
                ->onQueue(['default'])
                ->failWhenHealthJobTakesLongerThanMinutes(10),
            SecurityAdvisoriesCheck::new()
                ->dailyAt('10:00'),
            HorizonCheck::new(),
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Gate::define('viewPulse', fn (User $user) => $user->isAdmin());

        Gate::define('viewApiDocs', fn (User $user) => $user->subscribed());

        if (config('app.env') !== 'local') {
            URL::forceScheme('https');
        }
    }
}
