<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Brian2694\Toastr\Facades\Toastr;






class ContactController extends Controller{
public function index(){


  $message=Contact::all();

return view('admin.contact',compact('message'));

    }

public function destroy($id){
$message = Contact::findOrFail($id);
        $message->delete();
        Toastr::success('Message Successfully Deleted :)','Success');
        return redirect()->back();
}
public function show($contact){
 $contact = Contact::where('id',$contact)->first();
return view('admin.show',compact('contact'));

     }

}
