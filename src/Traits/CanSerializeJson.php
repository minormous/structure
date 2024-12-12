<?php

namespace Minormous\Structure\Traits;

trait CanSerializeJson /* implements JsonSerializable */
{
    /**
     * @see \Minormous\Structure\Traits\CanArray
     */
    abstract public function toArray();

    public function jsonSerialize()
    {
        return $this->toArray();
    }
}
