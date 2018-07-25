<?php

namespace App\Http\Controllers\Author;

use App\Comment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
  public function index(){
 $posts =Auth::user()->posts;
      
  return view('author.comments',compact('posts'));
    }

    //method for deleting comment
   public function destroy($comment){
    $comment = Comment::findOrFail($comment)->delete();
            if ($comment) {
            Toastr::success('Comment Successfully Deleted :)','Success');
             }else{

            Toastr::error('Comment Not Deleted :)','Success');
             }
           return redirect()->back();
         }
      }

