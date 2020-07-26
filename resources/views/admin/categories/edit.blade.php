@extends('layouts.app_admin')
@section('title') {{ $pageTitle }} @endsection
@section('content')
<div class="main-content">
    <div class="container-fluid content-top-gap">
        <section class="pricing">
            <div class="card card_border mb-12">
              <div class="card-body">
                <form action="{{ route('admin.categories.update') }}" method="POST" role="form" enctype="multipart/form-data">
                         @csrf
                    <section class="w3l-pricing1">
                      <div class="row px-2">
                        <div class="col-md-12 px-2">
                            <div class="mb-2 price-card price-card2 p-lg-2 p-md-2 p-2 recomemded-price">
                                <a href="{{ route('admin.categories.index') }}" class="btn btn-primary pull-right mt-2">Cancel</a>
                                <button type="submit" class="btn btn-primary pull-right m-2">Update Category</button>
                            {{-- <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1> --}}
                                <h3 class="tile-title">{{ $subTitle }}</h3>  
                                <div class="card-header p-0 card-heading">
                                    Eugene
                                </div>
                            </div>
                            @include('partials.flash')
                        
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="tile">
                    
                                            <div class="tile-body">
                                                 <div class="form-group">
                                                    <br/>
                                                    <br/>
                                                    <label class="control-label" for="name">Name <span class="m-l-5 text-danger"> *</span></label>
                                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name', $targetCategory->name) }}"/>
                                                    <input type="hidden" name="id" value="{{ $targetCategory->id }}">
                                                    @error('name') {{ $message }} @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="description">Description</label>
                                                    <textarea class="form-control" rows="6" name="description" id="description">{{ old('description', $targetCategory->description) }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="parent">Parent Category <span class="m-l-5 text-danger"> *</span></label>
                                                    <select id=parent class="form-control custom-select mt-15 @error('parent_id') is-invalid @enderror" name="parent_id">
                                                        <option value="0">Select a parent category</option>
                                                        @foreach($categories as $category)
                                                            @if ($targetCategory->parent_id == $category->id)
                                                                <option value="{{ $category->id }}" selected> {{ $category->name }} </option>
                                                            @else
                                                                <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    @error('parent_id') {{ $message }} @enderror
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" id="featured" name="featured"
                                                            {{ $targetCategory->featured == 1 ? 'checked' : '' }}
                                                            />Featured Category
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" id="menu" name="menu"
                                                            {{ $targetCategory->menu == 1 ? 'checked' : '' }}
                                                            />Show in Menu
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            @if ($targetCategory->image != null)
                                                                <figure class="mt-2" style="width: 80px; height: auto;">
                                                                    <img src="{{ asset('storage/'.$targetCategory->image) }}" id="categoryImage" class="img-fluid" alt="img">
                                                                </figure>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label class="control-label">Category Image</label>
                                                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"/>
                                                            @error('image') {{ $message }} @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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