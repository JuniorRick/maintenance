<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
  public function index()
  {

      $equipments = \App\Equipment::all();
      return view('equipments.equipments')->with('equipments', $equipments);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
    ]);
      $equipment = $request->all();
      \App\Equipment::create($equipment);

      return redirect('equipments')->with('status', 'Your ticket has been created! with id of:' . $request->id);
  }

  public function edit($id) {
      $equipment = \App\Equipment::findOrFail($id);

      return view('equipments/{id}');
  }

  public function destroy($id)
  {
      $equipment = \App\Equipment::findOrFail($id);
      $equipment->delete();

      return redirect('equipments');
  }

}
