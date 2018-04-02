<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cartridge;

class Management extends Model
{
    protected $guarded = [];

    public function getCartridgeModel() {
      if(Cartridge::find($this->cartridge_id))
        return Cartridge::where('id', $this->cartridge_id)->first()->model;

      return "not found";
    }

    public function getCartridgeBarcode() {
      if(Cartridge::find($this->cartridge_id))
        return Cartridge::where('id', $this->cartridge_id)->first()->barcode;

      return "not found";
    }

    public function getTonerModel() {
      if(Toner::find($this->toner_id))
        return Toner::where('id', $this->toner_id)->first()->model;

      return "not found";
    }

    public function getUserName() {
      if(User::find($this->user_id))
        return User::where('id', $this->user_id)->first()->name;

      return "not found";
    }
}
