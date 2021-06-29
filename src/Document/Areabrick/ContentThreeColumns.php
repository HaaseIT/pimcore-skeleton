<?php

declare(strict_types=1);

namespace App\Document\Areabrick;

class ContentThreeColumns extends AbstractAreabrickWithDefaultBrickConfig
{
    public function getName()
    {
        return 'ContentThreeColumns';
    }

    public function getDescription()
    {
        return '3-Spaltiger Content';
    }

    public function getIcon()
    {
        return parent::getIcon();
    }
}
