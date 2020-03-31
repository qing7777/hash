<?php

declare(strict_types=1);

/**
 * @link     https://www.qing7260.cn
 * @author   qing7260
 * @contact  qing7260@outlook.com
 */

namespace Qing7777\Hash;

use Hyperf\Utils\ApplicationContext;
use Qing7777\Hash\Contracts\Hasher;

/**
 * @method static needsRehash($hashedValue, array $options = [])
 * @method static check($value, $hashedValue, array $options = [])
 * @method static make($value, array $options = [])
 * @method static info($hashedValue) array
 * @method static driver($type) Hasher
 *
 * Class Hash
 * @see HashInterface
 * @package Qing7777\Hash
 */
class Hash
{
    public static function __callStatic($name, $arguments)
    {
        $HashInterface = ApplicationContext::getContainer()->get(HashInterface::class);

        return $HashInterface->$name(...$arguments);
    }
}