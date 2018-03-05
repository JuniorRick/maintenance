<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class UploadsController extends Controller
{
    public function upload($id) {

      if(Input::hasFile('file')) {
        $file = Input::file('file');
        if(is_file('uploads/' . $id . '/' . $file->getClientOriginalName())) {
          dd('file exists');
        }

        $file->move('uploads/' . $id, $file->getClientOriginalName());

        $upload = array('issue_id' => $id, 'name' => $file->getClientOriginalName(),
         'user_id' => Auth::user()->id);

        \App\File::create($upload);
        Session::flash('message', 'File ' . $file->getClientOriginalName() . ' successfully uploaded!');

        return back();
      }

      dd("file not selected");

    }

    public function getFilesByIssue($id) {
      $files = \App\File::where('issue_id', $id)->get();

      if(count($files) < 1) {
        foreach($files as $file) {
          unlink('uploads/' . $id . '/' . $file->name);
        }

      }
        return response()->json($files);
    }

    public function deleteFile($id, $filename) {

      $file = \App\File::where([['issue_id', '=', $id], ['name', '=', $filename]])->first();
      $file->delete();

      unlink('uploads/' . $id . '/' . $filename);

      Session::flash('message', 'File ' . $filename . ' was removed!');

      return back();
    }
}
