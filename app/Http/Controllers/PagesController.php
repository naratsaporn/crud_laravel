<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web development','Font','Back End']
        );
        return view('pages.services')->with($data);
    }
}
