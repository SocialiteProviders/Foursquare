<?php
namespace SocialiteProviders\Foursquare;

use SocialiteProviders\Manager\SocialiteWasCalled;

class FoursquareExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('foursquare', __NAMESPACE__.'\Provider');
    }
}
