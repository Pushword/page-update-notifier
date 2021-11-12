<?php

namespace Pushword\PageUpdateNotifier;

use Pushword\PageUpdateNotifier\DependencyInjection\PageUpdateNotifierExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PushwordPageUpdateNotifierBundle extends Bundle
{
    /**
     * @return \Pushword\PageUpdateNotifier\DependencyInjection\PageUpdateNotifierExtension|null
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new PageUpdateNotifierExtension();
        }

        return $this->extension;
    }
}
