<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participates;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipatesController extends Controller
{
    public function index()
    {
        $participates = response()->json(Participates::all());
        return $participates;
    }

    public function show($event_id, $user_id)
    {
        $participate = response()->json(
            Participates::where('event_id', '=', $event_id)
                ->where('user_id', '=', $user_id)
                ->first());
        return $participate;
    }

    public function destroy($event_id, $user_id)
    {
        Participates::where('event_id', '=', $event_id)
            ->where('user_id', '=', $user_id)
            ->first()
            ->delete();
        return redirect('/participate/list');
    }

    public function update(Request $request, $event_id, $user_id)
    {
        $participate = Participates::where('event_id', '=', $event_id)
            ->where('user_id', '=', $user_id)
            ->first();
        $participate->present = $request->present;
        $participate->save();
        return redirect('/participate/list');
    }

    public function store(Request $request)
    {
        $participate = new Participates();
        $participate->event_id = $request->event_id;
        $participate->user_id = $request->user_id;
        $participate->present = $request->present;
        $participate->save();
        return redirect('/participate/list');
    }

    public function newView()
    {
        $participates = Participates::all();
        $events = Event::all();
        $users = User::all();
        return view('participate.new', ['participates' => $participates, 'events' => $events, 'users' => $users]);
    }

    public function editView($event_id, $user_id)
    {
        $participate = Participates::where('event_id', '=', $event_id)
            ->where('user_id', '=', $user_id)
            ->first();
        return view('participate.edit', ['participate' => $participate]);
    }

    public function listView()
    {
        $participates = Participates::all();
        return view('participate.list', ['participates' => $participates]);
    }

    public function participateEvent($event_id, $user_id)
    {
        $user_id = Auth::user()->user_id;
        $participate = Participates::where('event_id', '=', $event_id)
            ->where('user_id', '=', $user_id)
            ->first();
        $participate->present = 1;
        $participate->save();
        return redirect('/participate/list');
    }
}
