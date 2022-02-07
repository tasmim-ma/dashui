<?php

namespace Tasmim\Dashui;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tasmim\Dashui\Components\Alert;
use Tasmim\Dashui\Components\Avatar;
use Tasmim\Dashui\Components\BlankImage;
use Tasmim\Dashui\Components\BlankState;
use Tasmim\Dashui\Components\CircularAvatar;
use Tasmim\Dashui\Components\ConfirmModal;
use Tasmim\Dashui\Components\DeleteModal;
use Tasmim\Dashui\Components\EmptyState;
use Tasmim\Dashui\Components\LayoutForm;
use Tasmim\Dashui\Components\LayoutIndex;
use Tasmim\Dashui\Components\LayoutMedium;
use Tasmim\Dashui\Components\LayoutSmall;
use Tasmim\Dashui\Components\LayoutWide;
use Tasmim\Dashui\Components\Message;
use Tasmim\Dashui\Components\Rating;
use Tasmim\Dashui\Components\SideoverForm;
use Tasmim\Dashui\Components\SideoverOverlay;
use Tasmim\Dashui\Components\Warning;

class DashuiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('dashui')
            ->hasConfigFile()
            ->hasViewComponents(
                'dashui',
                Alert::class,
                Message::class,
                BlankImage::class,
                Warning::class,
                BlankState::class,
                EmptyState::class,
                DeleteModal::class,
                ConfirmModal::class,
                Avatar::class,
                CircularAvatar::class,
                Rating::class,
                SideoverOverlay::class,
                SideoverForm::class,
                LayoutIndex::class,
                LayoutForm::class,
                LayoutWide::class,
                LayoutMedium::class,
                LayoutSmall::class
            )
            ->hasViews();
    }
}
