<?php

declare(strict_types=1);

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\EditableDialogBoxConfiguration;
use Pimcore\Extension\Document\Areabrick\EditableDialogBoxInterface;
use Pimcore\Model\Document;
use Pimcore\Model\Document\Editable\Area\Info;

abstract class AbstractAreabrickWithDefaultBrickConfig extends AbstractAreabrick implements EditableDialogBoxInterface
{
    public function getEditableDialogBoxConfiguration(
        Document\Editable $area,
        ?Info $info
    ): EditableDialogBoxConfiguration {
        $config = new EditableDialogBoxConfiguration();
        $config->setWidth(350);
        $config->setHeight(350);
        $config->setReloadOnClose(true);
        $config->setItems(
            [
                [
                    'type'  => 'select',
                    'label' => 'Abstand oben', // labels are optional
                    'name'  => 'brickMarginTop',
                    'config' => [
                        'store' => [
                            ['regular', 'regulär'],
                            ['none', 'keiner'],
                        ],
                        'defaultValue' => 'regular',
                        'width' => 290,
                    ]
                ],
                [
                    'type'  => 'select',
                    'label' => 'Abstand unten', // labels are optional
                    'name'  => 'brickMarginBottom',
                    'config' => [
                        'store' => [
                            ['regular', 'regulär'],
                            ['none', 'keiner'],
                        ],
                        'defaultValue' => 'regular',
                        'width' => 290,
                    ]
                ],
            ]
        );

        return $config;
    }
}
