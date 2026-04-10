<?php

/**
 * This source file is available under the terms of the
 * Pimcore Open Core License (POCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (https://www.pimcore.com)
 *  @license    Pimcore Open Core License (POCL)
 */

namespace App;

use Pimcore\Kernel as PimcoreKernel;
use Symfony\WebpackEncoreBundle\WebpackEncoreBundle;
use Nelmio\CorsBundle\NelmioCorsBundle;
use Nelmio\SecurityBundle\NelmioSecurityBundle;

class Kernel extends PimcoreKernel
{
    /**
     * Adds bundles to register to the bundle collection. The collection is able
     * to handle priorities and environment specific bundles.
     */
    public function registerBundlesToCollection(BundleCollection $collection): void
    {
        $collection->addBundle(new NelmioCorsBundle());
        $collection->addBundle(new NelmioSecurityBundle());
        $collection->addBundle(new WebpackEncoreBundle());
    }
}
