<?php
namespace App\Http\Controllers\Admin;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Post;
class FavoriteController extends Controller
{
    public function index()
    {

    	//finding authentic user post.
        $posts = Auth::user()->favorite_posts;
        return view('admin.favorite',compact('posts'));
    }
//favorite post

    public function destroy($id){

        //Post::find($id)->delete();
       // Toastr::success('Post Successfully Deleted :)','Success');
        //return redirect()->back();

        $posts = Post::find($id);
        $posts->delete();
        Toastr::success('Post Successfully Deleted :)','Success');
        return redirect()->back();    

    }

}