<?php

namespace App\Http\Controllers;
//use Cornford\Googlmapper\Facades\MapperFacade;
use App\Post;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

//use Cornford\Googlmapper\Facades\MapperFacade;
//use Illuminate\Support\Facades\Route;
//use Mapper;

  class MapController extends Controller
{
 public function index(){
//for making pagination
 $posts=Post::all()->where('view_count',2,3>0)->take(6);
  return view('populer',compact('posts'));
//return view('populer');

   }

}
