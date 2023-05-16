<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
 public function index(Request $request)
 {
 $name = $request->name;
 $age = $request->age;

 $city = $request->header(key:'city');
 $postcode = $request->header(key:'postcode');
 $position = $request->input(key:"position");
 $wing = $request->input(key:"wing");
 $office = $request->input(key:"office");
 return $data = array(
    'name' => $name,
    'age' => $age,
    'city' => $city,
    'postcode' => $postcode,
    'position' => $position,
    'wing' => $wing,
    'office' => $office
 );


// return $request->input();
 }
}
