<?php

declare(strict_types=1);

namespace App\Command;

use Pimcore\Console\AbstractCommand;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

abstract class ContainerAwareAbstractCommand extends AbstractCommand implements ContainerAwareInterface
{
    protected ?ContainerInterface $container;

    /**
     * @return ContainerInterface
     * @throws \LogicException
     */
    protected function getContainer()
    {
        if (null === $this->container) {
            $application = $this->getApplication();
            if (null === $application) {
                throw new \LogicException(
                    'The container cannot be retrieved as the application instance is not yet set.'
                );
            }

            $this->container = $application->getKernel()->getContainer();
        }

        return $this->container;
    }

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}
