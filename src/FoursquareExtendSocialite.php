<?php
namespace SocialiteProviders\Foursquare;

use SocialiteProviders\Manager\SocialiteWasCalled;

class FoursquareExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'foursquare', __NAMESPACE__.'\Provider'
        );
    }
}
