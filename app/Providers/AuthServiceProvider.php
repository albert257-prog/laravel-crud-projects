<?php

namespace App\Providers;

use App\Models\Task;
use App\Policies\TaskPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     */
    protected $policies = [
        Task::class => TaskPolicy::class, // This maps the model to its security rules
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}