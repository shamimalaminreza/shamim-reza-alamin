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
            background-image: url();
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
            <h4><b style="margin-left: 200px; margin-top: 200px;">CONTACT US</b></h4>
            <div class="row">

                <div class="col-lg-8 col-md-8" style="width: 500px;margin-left: 200px; margin-top: 50px;">
                    <div class="comment-form">
                      
                           <form method="post" action="{{route('contact.store')}}">
                            {{csrf_field()}}

                                          <div class="row">
                                    <div class="col-sm-12">



<input type="text" name="name" for="name" class="text-text-name form-control" placeholder="Enter your name" required="">

<input type="text" name="email" for="email" class="text-text-email form-control" placeholder="Enter your email" required="">

<input type="text" name="phone" for="phone" class="text-text-phone form-control" placeholder="Enter your phone" required="">

<input type="text" name="address" for="address" class="text-text-address form-control" placeholder="Enter your address" required="">

 <textarea name="message" rows="2" class="text-area-messge form-control"
placeholder="Enter your message" aria-required="true" aria-invalid="false"></textarea>


                                    </div><!-- col-sm-12 -->
                                    <div class="col-sm-12">
         <button class="submit-btn" type="submit" id="form-submit"><b>SEND</b></button>
                                    </div><!-- col-sm-12 -->

                                </div><!-- row -->
                            </form>
                       
                    </div><!-- comment-form -->
                 </div>
             </div><!-- commnets-area -->
       </div><!-- col-lg-8 col-md-12 -->

    </div><!-- row -->

 </div><!-- container -->
</section>




@endsection

@push('js')

@endpush