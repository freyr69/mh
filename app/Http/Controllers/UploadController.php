<?php

namespace Mistress\Http\Controllers;

use Mistress\Http\Controllers\Controller;
use Redirect;
use Session;
use Validator;
use Input;

class UploadController extends Controller
{

    public function upload()
    {
        $file      = array('image' => Input::file('image'));
        $rules     = array('image' => 'required');
        $validator = Validator::make($file, $rules);

        if ($validator->fails()) {
            return Redirect::to('upload')->withInput()->withErrors($validator);
        } else {
            if (Input::file('image')->isValid()) {
                $destinationPath = base_path() . '/storage/uploads';
                $extension       = Input::file('image')->getClientOriginalExtension();
                $fileName        = rand(111111, 999999) . '.' . $extension;
                Input::file('image')->move($destinationPath, $fileName);
                Session::flash('success', 'Uploaded successfully');
                return Redirect::to('upload');
            } else {
                Session::flash('error', 'uploaded file is not valid');
                return Redirect::to('upload');
            }
        }
    }

}
