<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class UploadsController extends Controller
{
    public function upload($id) {

      if(Input::hasFile('file')) {
        $file = Input::file('file');
        $file->move('uploads/' . $id, $file->getClientOriginalName());
        $upload = array('issue_id' => $id, 'name' => $file->getClientOriginalName(),
         'user_id' => Auth::user()->id);

        \App\File::create($upload);

        return back();
      }

      dd("file not selected");

    }

    public function getFilesByIssue($id) {
      $files = \App\File::where('issue_id', $id)->get();

     return response()->json($files);
    }
}
