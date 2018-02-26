<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenancesController extends Controller
{
    public function index()  {
      $equipments = \App\Equipment::all();

      return view('maintenance.index')->with('equipments', $equipments);
    }

    public function info($id) {
      $issues = \App\Maintenance::where('equipment_id', $id)->get();
      $equipment = \App\Equipment::findOrFail($id);
      return view('maintenance.info')->with(['issues' => $issues, 'equipment' => $equipment]);
    }

    public function show($id) {
      $issue = \App\Maintenance::find($id);

      return response()->json($issue);
    }

    public function store(Request $request)  {

      $issue = $request->all();
      \App\Maintenance::create($issue);

      return redirect()->back();
    }


    public function update(Request $request, $id) {
      $issue = \App\Maintenance::findOrFail($id);
      $input = $request->all();
      $issue->fill($input)->save();

      return redirect()->back();
    }

    public function destroy($id) {
      $issue = \App\Maintenance::findOrFail($id);
      $issue->delete();

      return redirect()->back();
    }

}
