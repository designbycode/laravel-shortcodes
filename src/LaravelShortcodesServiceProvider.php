<?php

namespace Designbycode\LaravelShortcodes;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Designbycode\LaravelShortcodes\Commands\LaravelShortcodesCommand;

class LaravelShortcodesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-shortcodes')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-shortcodes_table')
            ->hasCommand(LaravelShortcodesCommand::class);
    }
}
