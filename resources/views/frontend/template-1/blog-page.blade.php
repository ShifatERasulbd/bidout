@extends('frontend.template-1.partials.master')
    @section('content')
    @include('frontend.template-1.breadcrumb.breadcrumb')

    <div class="blog-section pt-120">
        <img alt="image" src="{{asset('frontend/images/bg/section-bg.png')}}" class="img-fluid section-bg-top" >
        <img alt="image" src="{{asset('frontend/images/bg/section-bg.png')}}" class="img-fluid section-bg-bottom" >
        <div class="container">
            <div class="row d-flex justify-content-center g-4">
                @if($blogs->count()>0)
                @foreach($blogs as $key=>$blog)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
                    @include('frontend.template-1.partials.blog-card')
                </div>
                @endforeach
                @else
                <h2 class="text-center">{{translate('No Data Found')}}</h2>
                @endif
            </div>
            <div class="row">
                {!! $blogs->links('vendor.pagination.custom') !!}
            </div>
        
        </div>
    </div>
    @endsection