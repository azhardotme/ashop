@extends('backend.layouts.app')
@section('content')
<div class="container">
    <section id="main-content">
        <section class="wrapper site-min-height mt-5">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Product</h2>
                </div>
               
                <div class="card-body">
                    <form action="{{url('update-product/'.$products->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <select class="browser-default custom-select">
                                    <option selected>Select Category</option>
                                    @foreach ($category as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$products->name}}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{$products->slug}}">
                                @error('slug')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Small Description</label>
                                <textarea name="small_description" rows="3" class="form-control">{{$products->small_description}}</textarea>
                                @error('small_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" rows="3" class="form-control">{{$products->description}}</textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status"  {{$products->status == "1" ? 'checked':''}}>
                                @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Trending</label>
                                <input type="checkbox" name="trending"  {{$products->trending == "1" ? 'checked':''}}>
                                @error('trending')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Original price</label>
                                <input type="number" name="original_price" class="form-control"  value="{{$products->original_price}}">
                                @error('original_price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Selling price</label>
                                <input type="number" name="selling_price" class="form-control" value="{{$products->selling_price}}">
                                @error('selling_price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Tax</label>
                                <input type="number" name="tax" class="form-control" value="{{$products->tax}}">
                                @error('tax')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Quentity</label>
                                <input type="number" name="qty" class="form-control" value="{{$products->qty}}">
                                @error('qty')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" value="{{$products->meta_title}}">
                                @error('meta_title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Keywords</label>
                                <textarea name="meta_keywords" rows="3" class="form-control">{{$products->meta_keywords}}</textarea>
                                @error('meta_keywords')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" rows="3" class="form-control">{{$products->meta_description}}</textarea>
                                @error('meta_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                @if($products->image)
                                <img src="{{asset('assets/uploads/products/'.$products->image)}}" class="cat_image mb-2" alt="Image here">
                               @endif
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
          
        </section>
    </section>
</div>

@endsection