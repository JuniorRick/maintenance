<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenancesController extends Controller
{
    public function index()  {
      $issues = \App\Maintenance::all();

      return view('maintenance.index')->with('issues', $issues);
    }

    public function show($id) {
      $issue = \App\Maintenance::find($id);

      return response()->json($issue);
    }

    public function store(Request $request)  {
      // $this->validate($request, [
      //   'name' => 'required',
      // ]);

      $issue = $request->all();
      \App\Maintenance::create($issue);

      return redirect('issues');
    }


    public function update(Request $request, $id) {
      $issue = \App\Maintenance::findOrFail($id);
      $input = $request->all();
      $issue->fill($input)->save();

      return redirect('issues');
    }

    public function destroy($id) {
      $issue = \App\Maintenance::findOrFail($id);
      $issue->delete();

      return redirect('issues');
    }

}
