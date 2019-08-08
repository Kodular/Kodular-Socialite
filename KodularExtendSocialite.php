<?php

namespace SocialiteProviders\Kodular;

use SocialiteProviders\Manager\SocialiteWasCalled;

class KodularExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('kodular', __NAMESPACE__.'\Provider');
    }
}
