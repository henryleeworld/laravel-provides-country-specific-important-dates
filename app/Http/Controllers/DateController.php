<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;

class DateController extends Controller
{
    public function isHoliday() 
    {
        $day = Carbon::parse('2020-12-25');
        echo '2020年12月25日是否為退伍軍人節：' . ($day->isVeteransDay() ? '是' : '否') . PHP_EOL;
        echo '2020年12月25日是否為美國感恩節：' . ($day->isAmericanThanksgiving() ? '是' : '否') . PHP_EOL;
        echo '2020年12月25日是否為聖誕節：' . ($day->isChristmasDay() ? '是' : '否') . PHP_EOL;
        echo '2020年12月25日是否為元旦：' . ($day->isNewYearsDay() ? '是' : '否') . PHP_EOL;
    }
}
