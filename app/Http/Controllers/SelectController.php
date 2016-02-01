<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SelectController extends Controller
{
    public function select(){
        $data=DB::table('roles')->select('name')->get();
        return view('pruebas.select')->with('data',$data);
    }

    public function postSelect(Request $request){
        dd($request->all());
    }
}
