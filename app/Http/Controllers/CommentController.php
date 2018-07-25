<?php

namespace App\Http\Controllers;
use App\Comment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
public function store(Request $request,$post){

$this->validate($request,[

          'comment'=>'required'
       ]);
//making model object
$comment=new Comment();
$comment->post_id=$post;
$comment->user_id=Auth::id();
$comment->comment=$request->comment;
$comment->save();
Toastr::success('Comment Successfully Published :)','Success');
return redirect()->back();

    }
public function update($id){
 $comment=Comment::find($id);
  return view('comment',compact('comment'));

}

public function edit(Request $request,$id){

  $this->validate($request,[
            'comment' => 'required',
        ]);

        $comment = Comment::find($id);
        $comment->comment = $request->comment;
        //$comment->id = $request->id;
        $comment->save();
        Toastr::success('Comment Successfully Updated :)','Success');
        return redirect()->back();

}
//public replay

public function stores(Request $request,$post){

//making model object
	 //$comment=Comment::find($id);

$comment=new Comment();
$comment->post_id=$post;
$comment->user_id=Auth::id();
$comment->replay=$request->replay;
$comment->comment=$request->comment;
$comment->save();
Toastr::success('Comment Successfully Replayed :)','Success');
return redirect()->back();


}


}
