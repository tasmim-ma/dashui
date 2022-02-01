<?php

namespace Tasmim\Dashui;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DashuiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('dashui')
            ->hasConfigFile()
            ->hasViews();
    }
}
