<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class DateController extends Controller
{
    public function isHoliday() 
    {
        $day = Carbon::parse(Carbon::now()->format('Y') . '-12-25');
        echo Carbon::now()->format('Y') . ' 年 12 月 25 日是否為退伍軍人節：' . ($day->isVeteransDay() ? '是' : '否') . PHP_EOL;
        echo Carbon::now()->format('Y') . ' 年 12 月 25 日是否為美國感恩節：' . ($day->isAmericanThanksgiving() ? '是' : '否') . PHP_EOL;
        echo Carbon::now()->format('Y') . ' 年 12 月 25 日是否為聖誕節：' . ($day->isChristmasDay() ? '是' : '否') . PHP_EOL;
        echo Carbon::now()->format('Y') . ' 年 12 月 25 日是否為元旦：' . ($day->isNewYearsDay() ? '是' : '否') . PHP_EOL;
    }
}
