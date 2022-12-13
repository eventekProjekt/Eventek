<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        $agencies = response()->json(Agency::all());
        return $agencies;
    }

    public function show($id)
    {
        $agency = response()->json(Agency::find($id));
        return $agency;
    }

    public function destroy($id)
    {
        Agency::find($id)->delete();
        return redirect('/agency/list');
    }

    public function update(Request $request, $id)
    {
        $agency = Agency::find($id);
        $agency->name = $request->name;
        $agency->country = $request->country;
        $agency->type = $request->type;
        $agency->save();
        return redirect('/agency/list');
    }

    public function store(Request $request)
    {
        $agency = new Agency();
        $agency->name = $request->name;
        $agency->country = $request->country;
        $agency->type = $request->type;
        $agency->save();
        return redirect('/agency/list');
    }

    public function newView()
    {
        $agencies = Agency::all();
        return view('agency.new', ['agencies' => $agencies]);
    }

    public function editView($id)
    {
        $agency = Agency::find($id);
        return view('agency.edit', ['agency' => $agency]);
    }

    public function listView()
    {
        $agencies = Agency::all();
        return view('agency.list', ['agencies' => $agencies]);
    }
}
