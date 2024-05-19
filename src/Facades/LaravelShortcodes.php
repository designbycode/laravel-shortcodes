<?php

namespace Designbycode\LaravelShortcodes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Designbycode\LaravelShortcodes\LaravelShortcodes
 */
class LaravelShortcodes extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Designbycode\LaravelShortcodes\LaravelShortcodes::class;
    }
}
