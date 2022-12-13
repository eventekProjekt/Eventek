<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    public function index()
    {
        $events = response()->json(Event::all());
        return $events;
    }

    public function show($id)
    {
        $event = response()->json(Event::find($id));
        return $event;
    }

    public function destroy($id)
    {
        Event::find($id)->delete();
        return redirect('/event/list');
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->date = $request->date;
        $event->agency_id = $request->agency_id;
        $event->limit = $request->limit;
        $event->save();
        return redirect('/event/list');
    }

    public function store(Request $request)
    {
        $event = new Event();
        $event->date = $request->date;
        $event->agency_id = $request->agency_id;
        $event->limit = $request->limit;
        $event->save();
        return redirect('/event/list');
    }

    public function newView()
    {
        $events = Event::all();
        return view('event.new', ['events' => $events]);
    }

    public function editView($id)
    {
        $event = Event::find($id);
        return view('event.edit', ['event' => $event]);
    }

    public function listView()
    {
        $events = Event::all();
        return view('event.list', ['events' => $events]);
    }

    public function eventsWithNames()
    {
        $events = DB::select("select e.name, a.name as agency, e.limit, e.date, e.location, e.status 
        from events as e
        join agencies as a on e.agency_id = a.agency_id");
        return $events;
    }
}
