<?php

use A909M\WeightConversions\WeightConversions;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can convert kilograms to pounds', function () {
    $pounds = WeightConversions::kilograms(100)->toPounds();
    expect($pounds)->toBe(220.462);
});
