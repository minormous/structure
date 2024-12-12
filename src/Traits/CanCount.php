<?php

namespace Minormous\Structure\Traits;

trait CanCount /* implements Countable */
{
    public function count()
    {
        return count($this->values);
    }
}
