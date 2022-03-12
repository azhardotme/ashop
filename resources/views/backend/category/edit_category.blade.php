@extends('backend.layouts.app')
@section('content')
<div class="container">
    <section id="main-content">
        <section class="wrapper site-min-height mt-5">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Category</h2>
                </div>
             
                <div class="card-body">
                    <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$category->name}}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" rows="3" class="form-control">{{$category->description}}</textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" {{$category->status == "1" ? 'checked':''}}>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Popular</label>
                                <input type="checkbox" name="popular" {{$category->popular == "1" ? 'checked':''}}>
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" value="{{$category->meta_title}}">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Keywords</label>
                                <textarea name="meta_keywords" rows="3" class="form-control">{{$category->meta_keywords}}</textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" rows="3" class="form-control">{{$category->meta_description}}</textarea>
                            </div>

                            <div class="col-md-12 mb-3">

                                @if($category->image)
                                 <img src="{{asset('assets/uploads/category/'.$category->image)}}" class="cat_image mb-2" alt="Image here">
                                @endif
                              
                                <input type="file" name="image" class="form-control">
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