@extends('layouts.backend.app')

@section('title','Contact')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                          VIEW DETAILS
                        </h2>
                    </div>
                    <div class="body">

                            <div class="form-group form-float">
                                <div class="form-line">



 <input type="text" id="name" class="form-control" name="name" readonly="" value="{{$contact->name}}">



                                    <label class="form-label">Name</label>
                                </div>
                            </div>


                            <div class="form-group form-float">
                                <div class="form-line">
            <input type="text" id="email" class="form-control" name="email" readonly="" value="{{$contact->email}}">
                                    <label class="form-label">Email</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                 <input type="text" id="phone" class="form-control" name="phone" value="{{$contact->phone}}">
                                    <label class="form-label">Phone</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                <input type="text" id="address" class="form-control" name="address" value="{{$contact->address}}">
                                    <label class="form-label">Address</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">


             <textarea id="message" class="form-control" name="message">{{$contact->message}}</textarea>


                                    <label class="form-label">Message</label>
                                </div>
                            </div>

           <a  class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.contact.index')}}">BACK</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush