<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Services\ScheduleService;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {

        return view('welcome', [
            'guests'    => Guest::orderBy('sort')->get(),
            'schedules' => ScheduleService::getGroupedSchedule(),
        ]);
    }

    public function about() {
        return view('about');
    }

    public function tickets() {
        return view('tickets');
    }

    public function travel() {
        return view('travel');
    }

    public function lodging() {
        return view('lodging');
    }

    public function food() {
        return view('food');
    }

    public function resources() {
        return view('resources');
    }

    public function schedule() {
        return view('schedule', ['schedules' => ScheduleService::getGroupedSchedule()]);
    }

}
