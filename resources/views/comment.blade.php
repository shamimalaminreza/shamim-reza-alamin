@extends('layouts.frontend.app')
@section('title')
@endsection
@push('css')
    <link href="{{ asset('assets/frontend/css/single-post/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/single-post/responsive.css') }}" rel="stylesheet">
    <style>

        .header-bg{
            height: 400px;
            width: 100%;
            background-size: cover;
        }
        .favorite_posts{
         color: blue;
        }


    </style>
@endpush
@section('content')
<section class="comment-section">
        <div class="container">
            <h4><b>POST COMMENT</b></h4>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="comment-form">
                        @guest
                            <p>For post a new comment. You need to login first. <a href="{{ route('login') }}">Login</a></p>
                        @else

                <form method="post" action="{{route('comment.updates',$comment->id)}}">
                                          {{csrf_field()}}  
                     

                                          <div class="row">
                                    <div class="col-sm-12">

        <textarea name="comment" rows="2" class="text-area-messge form-control"
        placeholder="Enter your comment" aria-required="true" aria-invalid="false">                            {{$comment->comment}}

                         </textarea>


                                    </div><!-- col-sm-12 -->
                                    <div class="col-sm-12">
                                        <button class="submit-btn" type="submit" id="form-submit"><b>UPDATE COMMENT</b></button>
                                    </div><!-- col-sm-12 -->

                                </div><!-- row -->
                            </form>
                        @endguest
                    </div><!-- comment-form -->


                            </div><!-- commnets-area -->


                </div><!-- col-lg-8 col-md-12 -->

            </div><!-- row -->

        </div><!-- container -->
</section>




@endsection

@push('js')

@endpush