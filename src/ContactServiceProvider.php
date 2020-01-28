<?php

namespace Junaid\Contact;
use Illuminate\Support\ServiceProvider;

class Contact extends ServiceProvider
{
    /*
     * Boot Service Prodvider
     *
     * @return void
    */
    public function boot ()
    {

        $this->loadRoutesFrom(__DIR__.'/routes/routes.php'); // Register package routes in service provider
        $this->loadViewsFrom(__DIR__.'/views','contact'); // Register package view in service provider
        $this->loadMigrationsFrom(__DIR__.'/database/migrations'); // Register package migrations in service provider
        $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'contact' ); // Register package congfig in service provider

        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);
    }

    /*
     * Register Service Prodvider
     *
     * @return void
    */
    public function register ()
    {

    }
}
