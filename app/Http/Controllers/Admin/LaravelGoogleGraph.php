<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
USE DB;
class LaravelGoogleGraph extends Controller
{
    

 public function index(){
 $data=DB::table('comments')->select( DB::raw('comment as comment'),DB::raw('count(*) as number'))->groupBy('comment')->get();
      $array[]=['Comment','Number'];
         foreach ($data as $key => $value)
         {
        $array[++$key]=[$value->comment,$value->number];
         }
return view('admin.pi_chart')->with('comment',json_encode($array));


    }
}
