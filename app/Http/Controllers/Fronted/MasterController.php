<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index(){
        return view('pages.index');
    }
}
