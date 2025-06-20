<?php

use Illuminate\Support\Facades\Route;

Route::get('/vakken-overzicht', function () {
    return view('vakken');
});

