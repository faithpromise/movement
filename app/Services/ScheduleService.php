<?php

namespace App\Services;

use App\Models\Schedule;
use Carbon\Carbon;

class ScheduleService {

    public static function getGroupedSchedule() {

        $today = Carbon::today('UTC');
        $schedules = [];
        $days = Schedule::orderBy('starts_at')->get()->groupBy(function ($schedule) { return $schedule->starts_at->startOfDay()->timestamp; });

        $first_day = $days->first()->first()->starts_at->startOfDay();
        $last_day = $days->last()->first()->starts_at->startOfDay();

        foreach ($days as $key => $day) {

            $first_item = $day->first();

            $schedules[] = (object)[
                'is_active' => $first_item->starts_at->startOfDay()->eq($today),
                'date'      => $first_item->starts_at->startOfDay(),
                'dayOfWeek' => $first_item->starts_at->format('D'),
                'slots'     => $day,
            ];

        }

        if ($first_day->gt($today))
            $schedules[0]->is_active = true;

        if ($last_day->lt($today))
            $schedules[count($schedules) - 1]->is_active = true;

        return $schedules;

    }

}