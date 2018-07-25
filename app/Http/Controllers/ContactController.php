<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index(){

        return view('contact');

   }
public function store(Request $request){
$this->validate($request,[
               'name'=>'required',
               'email'=>'required|email|unique:contacts',
               'phone'=>'required',
               'address'=>'required',
               'message'=>'required'
        ]);
          
$contact=new Contact();
 $contact->name=$request->name;
$contact->email=$request->email;
$contact->phone=$request->phone;
$contact->address=$request->address;
$contact->message=$request->message;
 $contact->save();
 if ($contact) {
  Toastr::success('Contact Added  Successfully :)','Success');
   } else {
    Toastr::info('Contact  is not added','Info');
      }
    return redirect()->back();
}
public function show(){

//return view('admin.message');

       }

}
