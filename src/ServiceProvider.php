<?php

namespace LuckyMedia\WidthField;

use LuckyMedia\WidthField\Fieldtypes\WidthFieldtype;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $fieldtypes = [
        WidthFieldtype::class,
    ];

    protected $scripts = [
        __DIR__.'/../dist/js/width-fieldtype.js',
    ];

    public function boot()
    {
        parent::boot();

        $this->publishes([
            __DIR__.'/../config/widthfield.php' => config_path('widthfield.php')
        ], 'config');
    }

    public function register() {
        $this->mergeConfigFrom(__DIR__.'/../config/widthfield.php', 'widthfield');
    }
}
