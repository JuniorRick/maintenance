<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

  public function index() {
    $categories = \App\Category::all();
    $sections = \App\Section::all();

    return view('categories.index',
      ['categories' => $categories, 'sections' => $sections]);
  }
}
