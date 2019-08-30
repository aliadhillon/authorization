<?php

namespace App\Providers;

use App\Policies\PostPolicy;
use App\Post;
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
        Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('show-post', function($user, $post){
        //     return $user->id == $post->user_id;
        // });

        // Gate::define('update-post', 'App\Policies\PostPolicy@update');

        // Gate::before(function($user){
        //     if ($user->isAdmin()) {
        //         return true;
        //     }
        // });
    }
}
