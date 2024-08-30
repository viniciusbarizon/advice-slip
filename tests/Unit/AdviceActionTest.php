<?php

use App\Actions\AdviceAction;

it('receives an advice', function () {
    $advice = (new AdviceAction)->get();

    expect($advice)->toBeString();
});
