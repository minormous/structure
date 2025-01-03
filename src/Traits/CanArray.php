<?php

namespace Minormous\Structure\Traits;

use Minormous\Structure\StructureInterface;

trait CanArray /* implements StructureInterface */
{
    public function toArray()
    {
        return array_map(static function ($value) {
            if ($value instanceof StructureInterface) {
                $value = $value->toArray();
            }
            return $value;
        }, $this->values);
    }
}
