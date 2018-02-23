<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
  protected $guarded = [];

  public function getEquipmentName() {
    return Equipment::where('id', $this->equipment_id)->first()->name;
  }

  public function getEquipmentLocation() {
    // $section_id = Equipment::where('id', $this->equipment_id)->first()->section_id;
    // $section_name = Section::where('id', $section_id)->first()->name;

    return Equipment::where('id', $this->equipment_id)->first()->office;
    // return $section_name . '(' . $office . ')';
  }

  public function getCallType() {

    return Call::where('id', $this->call_id)->first()->name;
  }

}
