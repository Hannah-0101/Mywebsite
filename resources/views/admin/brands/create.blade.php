@extends('layouts.app_admin')
@section('title') {{ $pageTitle }} @endsection
@section('content')
<div class="main-content">
    <div class="container-fluid content-top-gap">
        <section class="pricing">
            <div class="card card_border mb-12">
              <div class="card-body">
                <form action="{{ route('admin.brands.store') }}" method="POST" role="form" enctype="multipart/form-data">
                         @csrf
                    <section class="w3l-pricing1">
                      <div class="row px-2">
                        <div class="col-md-12 px-2">
                            <div class="mb-2 price-card price-card2 p-lg-2 p-md-2 p-2 recomemded-price">
                                <a href="{{ route('admin.brands.index') }}" class="btn btn-danger pull-right mt-2">Cancel</a>
                                <button type="submit" class="btn btn-primary pull-right m-2">Save Brand</button>
                            {{-- <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1> --}}
                                <h3 class="tile-title">{{ $subTitle }}</h3>  
                                {{-- <div class="card-header p-0 card-heading">
                                    Attribute Information
                                </div> --}}
                            </div>
                            @include('partials.flash')
                        
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="tile">
                                            <h3 class="tile-title">{{ $subTitle }}</h3>
                                            
                                                <div class="tile-body">
                                                    <div class="form-group">
                                                        <label class="control-label" for="name">Name <span class="m-l-5 text-danger"> *</span></label>
                                                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}"/>
                                                        @error('name') {{ $message }} @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Brand Logo</label>
                                                        <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo" name="logo"/>
                                                        @error('logo') {{ $message }} @enderror
                                                    </div>
                                                </div>
                                                {{-- <div class="tile-footer">
                                                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Brand</button>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <a class="btn btn-secondary" href="{{ route('admin.brands.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                                                </div> --}}
                                           
                                        </div>
                                    </div>
                                </div>
                        </div>
                     </div>
                   </section>
                </form>
              </div>
            </div>
      </section>
   </div>
</div>
          
@endsection