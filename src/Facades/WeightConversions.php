<?php

namespace A909M\WeightConversions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \A909M\WeightConversions\WeightConversions
 */
class WeightConversions extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \A909M\WeightConversions\WeightConversions::class;
    }
}
