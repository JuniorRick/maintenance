<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
  public function index()  {
    $equipments = \App\Equipment::all();

    return view('equipments.equipments')->with('equipments', $equipments);
  }

  public function show($id) {
    $equipment = \App\Equipment::find($id);

    return response()->json($equipment);
    // dd($id);
  }

  public function store(Request $request)  {
    $this->validate($request, [
      'name' => 'required',
    ]);

    $equipment = $request->all();
    \App\Equipment::create($equipment);

    return redirect('equipments')->with('status', 'Your ticket has been created! with id of:' . $request->id);
  }

  public function edit($id) {
    $equipment = \App\Equipment::findOrFail($id);

    return view('equipments.edit')->with('equipment', $equipment);
  }

  public function update(Request $request, $id) {
    $equipment = \App\Equipment::findOrFail($id);
    $input = $request->all();
    $equipment->fill($input)->save();

    return redirect('equipments');
  }

  public function destroy($id) {
    $equipment = \App\Equipment::findOrFail($id);
    $equipment->delete();

    return redirect('equipments');
  }

}
