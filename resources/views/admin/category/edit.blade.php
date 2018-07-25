@extends('layouts.backend.app')

@section('title','Category')

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
                          Edit Post
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin.post.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="name" class="form-control" name="name" value="{{ $category->name }}">
                                    <label class="form-label">Post Name</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="file" name="image">
                            </div> <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.post.index') }}">BACK</a>
        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush