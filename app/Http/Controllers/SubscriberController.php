<?php
namespace App\Http\Controllers;
use App\Subscriber;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubscriberController extends Controller{

	//method for subscriber
public function store(Request $request){
    //return $request->all();
   $this->validate($request,[
   'email'=>'required|email|unique:subscribers'
   ]);

//making model object
   $subscriber=new Subscriber();
  $subscriber->email=$request->email;
  $subscriber->save();

     if ($subscriber) {
   Toastr::success('Subscriber Added  Successfully in subscribe list :)','Success');
      } else {
      Toastr::info('Subscriber  is not added in subscribe list','Info');
        }
      return redirect()->back();

    }

}
