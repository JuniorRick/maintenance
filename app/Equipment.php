<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
  protected $table = 'equipments';

  protected $guarded = [];

  public function getCategoryName($id) {
    return Category::where('id', $this->category_id)->first()->name;
  }

  public function getSectionName($id) {
    return Section::where('id', $this->section_id)->first()->name;
  }

}
