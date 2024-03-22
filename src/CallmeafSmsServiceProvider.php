<?php

namespace Callmeaf\Sms;

use Illuminate\Support\ServiceProvider;

class CallmeafSmsServiceProvider extends ServiceProvider
{
    private const CONFIGS_DIR = __DIR__ . '/../config';
    private const CONFIGS_KEY = 'callmeaf-sms';
    private const CONFIGS_GROUP = 'callmeaf-sms-config';

    public function boot()
    {
        $this->registerConfig();

    }

    private function registerConfig()
    {
        $this->mergeConfigFrom(self::CONFIGS_DIR . '/callmeaf-sms.php',self::CONFIGS_KEY);
        $this->publishes([
            self::CONFIGS_DIR . '/callmeaf-sms.php' => config_path('callmeaf-sms.php'),
        ],self::CONFIGS_GROUP);
    }
}
