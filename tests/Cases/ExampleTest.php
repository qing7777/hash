<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Qing7777\Test\Cases;

use HyperfTest\HttpTestCase;
use Qing7777\Hash\Hash;

/**
 * @internal
 * @coversNothing
 */
class ExampleTest extends HttpTestCase
{
    public function testMakeHash()
    {
        $pwd = '123456';
        $hashPwd = Hash::make($pwd);

        $this->assertIsString($hashPwd);
    }
}
