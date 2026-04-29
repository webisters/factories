<?php
/*
 * This file is part of Webisters Factories Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Factories\Support;

class Foo
{
    public mixed $arg;

    public function __construct(mixed $arg = null)
    {
        $this->arg = $arg;
    }
}
