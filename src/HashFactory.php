<?php

declare(strict_types=1);

/**
 * @link     https://www.qing7260.cn
 * @author   qing7260
 * @contact  qing7260@outlook.com
 */

namespace Qing7777\Hash;

use Psr\Container\ContainerInterface;


class HashFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return make(HashManager::class);
    }
}