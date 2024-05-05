<?php

use App\Http\Controllers\DateController;
use Illuminate\Support\Facades\Route;

Route::get('date/holiday/', [DateController::class, 'isHoliday']);
