<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Elcodi\Plugin\DisqusBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

use Elcodi\Component\Plugin\Interfaces\PluginInterface;
use Elcodi\Plugin\DisqusBundle\DependencyInjection\ElcodiDisqusExtension;

/**
 * Class ElcodiDisqusBundle
 */
class ElcodiDisqusBundle extends Bundle implements PluginInterface
{
    /**
     * Returns the bundle's container extension.
     *
     * @return ExtensionInterface The container extension
     */
    public function getContainerExtension()
    {
        return new ElcodiDisqusExtension();
    }
}