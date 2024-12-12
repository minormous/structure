<?php

namespace Minormous\Structure\Traits;

use Minormous\Structure\StructureInterface;

trait CanCompare
{
    public function isSimilar(StructureInterface $target)
    {
        return $target instanceof self;
    }
}
