<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Participates;
use App\Models\User;
use Illuminate\Http\Request;

class ParticipatesController extends Controller
{
    public function index()
    {
        $participates = response()->json(Participates::all());
        return $participates;
    }

    public function show($id)
    {
        $participate = response()->json(Participates::find($id));
        return $participate;
    }

    public function destroy($id)
    {
        Participates::find($id)->delete();
        return redirect('/participate/list');
    }

    public function update(Request $request, $id)
    {
        $participate = Participates::find($id);
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
        $events = Events::all();
        $users = User::all();
        return view('participate.new', ['participates' => $participates, 'events' => $events, 'users' => $users]);
    }

    public function editView($id)
    {
        $participate = Participates::find($id);
        return view('participate.edit', ['participate' => $participate]);
    }

    public function listView()
    {
        $participates = Participates::all();
        return view('participate.list', ['participates' => $participates]);
    }
}
