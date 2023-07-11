<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|

*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Mostrar una cita inspiradora');
