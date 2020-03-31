<?php

declare(strict_types=1);

/**
 * @link     https://www.qing7260.cn
 * @author   qing7260
 * @contact  qing7260@outlook.com
 */

namespace Qing7777\Hash;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                HashInterface::class => HashFactory::class
            ],
            'annotations'  => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ]
                ],
            ],
            'publish'      => [
                [
                    'id'          => 'qing7777-hash',
                    'description' => 'The hash for hyperf.',
                    'source'      => __DIR__ . '/../publish/hashing.php',
                    'destination' => BASE_PATH . '/config/autoload/hashing.php',
                ],
            ],
        ];
    }
}
