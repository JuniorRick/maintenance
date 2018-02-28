<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded = [];

    public function getUserName() {
      return User::where('id', $this->user_id)->first()->name;
    }
}
