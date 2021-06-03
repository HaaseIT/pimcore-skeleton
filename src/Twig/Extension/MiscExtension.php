<?php

declare(strict_types=1);

namespace App\Twig\Extension;

use Pimcore\Model\Document;
use Pimcore\Navigation\Container;
use Pimcore\Twig\Extension\Templating\Navigation;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use Twig\TwigFunction;

class MiscExtension extends AbstractExtension implements GlobalsInterface
{
    protected $uniqueCounter = -1;

    private $navigationHelper;

    /**
     * @param Navigation $navigationHelper
     */
    public function __construct(Navigation $navigationHelper) {
        $this->navigationHelper = $navigationHelper;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('app_get_unique_counter', [$this, 'getUniqueCounter']),
            new TwigFunction('app_build_nav', [$this, 'buildNavigation']),
        ];
    }

    public function getGlobals(): array
    {
        return [
        ];
    }

    public function getUniqueCounter()
    {
        $this->uniqueCounter++;
        return $this->uniqueCounter;
    }

    /**
     * This is essentially the same as the buildNavigation method on the
     * Navigation helper, but without a pageCallback as it does not make
     * sense in Twig context. If you need a more customized navigation
     * with a callback, build the navigation externally, pass it to the
     * view and just call render through the extension.
     *
     * @param mixed $params config array or active document (legacy mode)
     * @param Document|null $navigationRootDocument
     * @param string|null $htmlMenuPrefix
     * @param bool|string $cache
     *
     * @return Container
     *
     * @throws \Exception
     */
    public function buildNavigation(
        $params = null,
        Document $navigationRootDocument = null,
        string $htmlMenuPrefix = null,
        $cache = true,
        Document $homePage = null
    ): Container {

            // using param configuration
            $container = $this->navigationHelper->build($params);

//        $container->addPage(
//            [
//                'order' => -1,
//                'uri' => '/',
//                'label' => $homePage->getProperty('navigation_name'),
//                'title' => $homePage->getProperty('navigation_title'),
//                'active' => $params->getId() == $homePage->getId(),
//            ]
//        );

        return $container;
    }
}
