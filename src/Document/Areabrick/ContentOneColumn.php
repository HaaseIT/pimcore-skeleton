<?php

declare(strict_types=1);

namespace App\Document\Areabrick;

class ContentOneColumn extends AbstractAreabrickWithDefaultBrickConfig
{
    public function getName()
    {
        return 'ContentOneColumn';
    }

    public function getDescription()
    {
        return '1-Spaltiger Content';
    }

    public function getIcon()
    {
        return parent::getIcon();
    }
}
