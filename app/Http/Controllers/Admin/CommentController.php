<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

use App\Comment;
use App\Post;




class CommentController extends Controller{ 
public function index(){
 $comments = Comment::latest()->get();
      
  return view('admin.comments',compact('comments'));
    }

    //method for deleting comment
   public function destroy($comment){
    $comment = Comment::findOrFail($comment);
        $comment->delete();
        Toastr::success('Comment Successfully Deleted :)','Success');
        return redirect()->back();

      }

}


