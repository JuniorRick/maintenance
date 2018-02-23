<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class GroupsController extends Controller
{

  public function index() {
    $categories = \App\Category::all();
    $sections = \App\Section::all();

    return view('groups.index',
      ['categories' => $categories, 'sections' => $sections]);
  }

  public function showCategory($id) {
    $category = \App\Category::find($id);

    return response()->json($category);
  }

  public function showSection($id) {
    $section = \App\Section::find($id);

    return response()->json($section);
  }

  public function storeCategory(Request $request)  {
    $this->validate($request, [
      'name' => 'required',
    ]);

    $category = $request->all();
    \App\Category::create($category);

    return redirect('groups');
  }

  public function storeSection(Request $request)  {
    $this->validate($request, [
      'name' => 'required',
    ]);

    $section = $request->all();
    \App\Section::create($section);

    return redirect('groups');
  }

  public function editCategory($id) {
    $category = \App\Category::findOrFail($id);

    return view('categories.edit')->with('category', $category);
  }

  public function editSection($id) {
    $section = \App\Section::findOrFail($id);

    return view('sections.edit')->with('section', $section);
  }

  public function updateCategory(Request $request, $id) {
    $category = \App\Category::findOrFail($id);
    $input = $request->all();
    $category->fill($input)->save();

    return redirect('groups');
  }

  public function updateSection(Request $request, $id) {
    $section = \App\Section::findOrFail($id);
    $input = $request->all();
    $section->fill($input)->save();

    return redirect('groups');
  }

  public function destroyCategory($id) {
    $category = \App\Category::findOrFail($id);
    $category->delete();

    return redirect('groups');
  }

  public function destroySection($id) {
    $section = \App\Section::findOrFail($id);
    $section->delete();

    return redirect('groups');
  }

}
