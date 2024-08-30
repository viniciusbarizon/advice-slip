<?php

use App\Actions\AdviceAction;
use Illuminate\Support\Facades\Route;

Route::get('/', function (AdviceAction $adviceAction) {
    return $adviceAction->get() . 'a';
});
