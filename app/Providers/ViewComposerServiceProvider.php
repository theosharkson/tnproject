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

        View::composer(['admin.portfolio.list'],'App\ViewComposers\AdminComposers\PortfoliosComposer');
        View::composer(['admin.portfolio_items.list'],'App\ViewComposers\AdminComposers\PortfolioItemsComposer');


        View::composer(['admin.extras.list',
                        'site.bookings.customize',
                        'site.bookings.edit_cart_package',
                        ],'App\ViewComposers\AdminComposers\ExtrasComposer');




        /* SITE COMPOSERS */

        View::composer(['site.packages.list'],'App\ViewComposers\SiteComposers\PackagesComposer');
        View::composer([
            'site.package_types.list',
            'site.package_types.video',
            'site.package_types.photo',
        ],'App\ViewComposers\SiteComposers\PackageTypesComposer');

        View::composer(['site.*'],'App\ViewComposers\SiteComposers\PriceColumnComposer');
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
