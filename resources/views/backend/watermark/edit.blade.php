@extends('backend.layouts.master')
@section('content')
    <div class="row mb-35">
        <div class="page-title d-flex justify-content-between align-items-center">
            <h4>{{ $page_title ?? '' }}</h4>
            <a href="{{ route('products.list') }}" class="eg-btn btn--primary back-btn"> <img
                    src="{{ asset('backend/images/icons/back.svg') }}" alt="{{ translate('Go Back') }}">
                {{ translate('Go Back') }}</a>
        </div>
    </div>
    <form action="{{ route('watermark.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-lg-6">
                <div class="eg-card product-card">
                <input type="hidden" value="{{ $watermark->id }}" name="id">
                   
                      <div class="form-inner file-upload mb-35">
                                <div id="drag-drop-area">
                                    <h3 class="text-danger">NEED TO ADD IMAGE UPLOAD DRAG & DROP</h3>
                                </div>

                                <label class="control-label">{{ translate('WaterMark Image') }}</label>

                                <div class="dropzone-wrapper">
                                    <div class="dropzone-desc">
                                        <i class="glyphicon glyphicon-download-alt"></i>
                                        <p>{{ translate('Choose an image file or drag it here') }}</p>
                                    </div>
                                    <input type="file" name="image" class="dropzone featues_image">

                                </div>


                                <div class="preview-zone hidden">
                                    <div class="box box-solid">
                                        <div class="box-header with-border">
                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-danger btn-xs remove-preview"
                                                    style="display:none;">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="box-body"></div>
                                    </div>
                                </div>
                            </div>
            
                   <div class="button-group mt-15">

                                <button type="submit" class="radio-button">
                                    <input type="radio" id="status1" name="status" value="1" />
                                    <label class="eg-btn btn--green medium-btn"
                                        for="status1">{{ translate('Published') }}</label>
                                </button>
                                <!-- <button type="submit" class="radio-button">
                                    <input type="radio" id="status2" name="status" value="2" />
                                    <label class="eg-btn btn--primary medium-btn"
                                        for="status2">{{ translate('Draft') }}</label>
                                </button> -->
                            </div>
                  
                   


               
                </div>
            </div>
       


             <div class="col-lg-4">
                <div class="eg-card product-card">

                   
                      <div class="form-inner file-upload mb-35">
                               

                                <label class="control-label">{{ translate('WaterMark Image') }}</label>

                                <div>
                                    <div>
                                      
                                       <img src="{{asset($watermark->waterMark_image)}}">
                                    </div>
                                   

                                </div>


                           
                            </div>
            
                 
                  
                   


               
                </div>
            </div>
       
        </div>
    </form>

@endsection
