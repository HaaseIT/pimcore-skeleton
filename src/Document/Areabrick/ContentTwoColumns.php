<?php

declare(strict_types=1);

namespace App\Document\Areabrick;

class ContentTwoColumns extends AbstractAreabrickWithDefaultBrickConfig
{
    public function getName()
    {
        return 'ContentTwoColumns';
    }

    public function getDescription()
    {
        return '2-Spaltiger Content';
    }

    public function getIcon()
    {
        return parent::getIcon();
    }
}
