<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use App\Models\Guest;
use App\Models\Message;
use App\Services\ScheduleService;
use Carbon\Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;

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

    public function contact() {
        return view('contact');
    }

    public function sendMessage(Request $request) {

        $data = $request->only('name', 'email', 'phone', 'body');

        $message = new Message;
        $message->name = $data['name'];
        $message->email = $data['email'];
        $message->phone = preg_replace('/[^0-9]/', '', $data['phone']);
        $message->body = $data['body'];
        $message->save();

//        try {
            Mail::to('jeffc@faithpromise.org')
                ->send(new MessageReceived($message));
            $message->sent_at = Carbon::now('UTC');
            $message->save();
//        } catch (\Exception $e) {}

        return redirect('/contact')->with('sent', true);

    }

    public function speaker($slug) {
        $guest = Guest::where('slug', '=', $slug)->first();

        return view('speaker', [
            'guest'  => $guest,
            'guests' => Guest::where('slug', '!=', $slug)->orderBy('sort')->get(),
        ]);
    }

    public function messagePreview($id) {
        $message = Message::find($id);

        return new MessageReceived($message);
    }

}
