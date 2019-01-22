<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['admin.user_types.list',
                        'admin.staffs.create',
                        'admin.staffs.edit',
                    ],'App\ViewComposers\AdminComposers\UserTypesComposer');

        View::composer(['admin.features.list',
                        'admin.user_types.create',
                        'admin.user_types.edit',
                    ],'App\ViewComposers\AdminComposers\FeaturesComposer');


        View::composer(['admin.staffs.list'],'App\ViewComposers\AdminComposers\StaffsComposer');
        View::composer(['admin.packages.list'],'App\ViewComposers\AdminComposers\PackagesComposer');
        View::composer(['admin.package_types.list'],'App\ViewComposers\AdminComposers\PackageTypesComposer');


        View::composer(['site.packages.list'],'App\ViewComposers\SiteComposers\PackagesComposer');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
