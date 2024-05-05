<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class DateController extends Controller
{
    public function isHoliday() 
    {
        $day = Carbon::parse(Carbon::now()->format('Y') . '-12-25');
        echo __('Is December 25, :year Veterans Day:', ['year' => Carbon::now()->format('Y')]) . ($day->isVeteransDay() ? __('Yes') : __('No')) . PHP_EOL;
        echo __('Is December 25, :year Thanksgiving:', ['year' => Carbon::now()->format('Y')]) . ($day->isAmericanThanksgiving() ? __('Yes') : __('No')) . PHP_EOL;
        echo __('Is December 25, :year Christmas:', ['year' => Carbon::now()->format('Y')]) . ($day->isChristmasDay() ? __('Yes') : __('No')) . PHP_EOL;
        echo __('Is December 25, :year New Year:', ['year' => Carbon::now()->format('Y')]) . ($day->isNewYearsDay() ? __('Yes') : __('No')) . PHP_EOL;
    }
}
