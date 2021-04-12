<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;

use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Http\Responses\RegisterResponse as FortifyRegisterResponse;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        
        Fortify::registerView(function(){
            return view('auth/register');
        });

        Fortify::loginView(function(){
            return view('auth/login');
        });

        $this->app->singleton(
            \Laravel\Fortify\Contracts\RegisterResponse::class,
            \App\Http\Responses\RegisterResponse::class,
        );

        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('username', $request->username)->first();
            
            if ($user &&
                Hash::check($request->password, $user->password) &&
                $user->is_active == 1) {
                return $user;
            }
        });
    }
}
