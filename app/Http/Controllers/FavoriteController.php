<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FavoriteController extends Controller{
    public function add($post)
    {
         $user = Auth::user();
         $isFavorite = $user->favorite_posts()->where('post_id',$post)->count();
        if ($isFavorite == 0)
        {

        	//if attach is used  it is added in favourite list
            $user->favorite_posts()->attach($post);
            Toastr::success('Post successfully added to your favorite list :)','Success');
            return redirect()->back();
        } else {

        	//if detteched is used then id is removed
            $user->favorite_posts()->detach($post);
            Toastr::success('Post successfully removed form your favorite list:)','Success');
            return redirect()->back();
        }
    }
}
