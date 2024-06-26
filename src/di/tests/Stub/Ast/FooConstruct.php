<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace HyperfTest\Di\Stub\Ast;

class FooConstruct
{
    public function __construct(
        public readonly string $name,
        protected readonly int $age = 18,
        private ?int $id = null,
    ) {
    }
}
