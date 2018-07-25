<?php
namespace App\Http\Controllers\Author;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller{

    public function index()
    {
        return view('author.settings');
    }
    public function updateProfile(Request $request){
//profile successfully updated
         $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        $user = User::findOrFail(Auth::id());
if(isset($image)){
      $imagename=$slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
       if (!file_exists('uploads/profile')) 
       {
      mkdit('uploads/profile');
        }
      $image->move('uploads/profile',$imagename);

        } else {
         $imagename = $user->image;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->image = $imagename;
        $user->about = $request->about;
        $user->save();
        Toastr::success('Profile Successfully Updated :)','Success');
        return redirect()->back();
    }

    public function updatePassword(Request $request){
    	//for update password
   $this->validate($request,['old_password' => 'required','password' => 'required|confirmed',]);
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password,$hashedPassword))
        {
            if (!Hash::check($request->password,$hashedPassword))
            {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Toastr::success('Password Successfully Changed','Success');
                //Auth::logout();
                return redirect()->back();
            } else {
                Toastr::error('New password cannot be the same as old password.','Error');
                return redirect()->back();
            }
        } else {
            Toastr::error('Current password not match.','Error');
            return redirect()->back();
        }
    }
}