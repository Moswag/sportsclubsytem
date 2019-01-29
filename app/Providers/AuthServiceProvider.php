<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isUser', function ($user){
            $users=DB::table('user_role')->select('role_id')->where('user_id','=',$user->id)->get();
            foreach ($users as $user)

                if($user->role_id=='1'){
                    return true;
                }
            return false;
        });

        $gate->define('isAdmin', function ($user){
            $users=DB::table('user_role')->select('role_id')->where('user_id','=',$user->id)->get();
            foreach ($users as $user)

                if($user->role_id=='2'){
                return true;
                }
                return false;
        });


        $gate->define('isHR', function ($user){
            $users=DB::table('user_role')->select('role_id')->where('user_id','=',$user->id)->get();
            foreach ($users as $user)

                if($user->role_id=='3'){
                    return true;
                }
            return false;
        });

        $gate->define('isSupervisor', function ($user){
            $users=DB::table('user_role')->select('role_id')->where('user_id','=',$user->id)->get();
            foreach ($users as $user)

                if($user->role_id=='4'){
                    return true;
                }
            return false;
        });

        //
    }
}
