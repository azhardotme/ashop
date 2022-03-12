@extends('backend.layouts.app')
@section('content')
<div class="container">
    <section id="main-content">
        <section class="wrapper site-min-height mt-5">
            <div class="card">
                <div class="card-header">
                    <h2>Add Category</h2>
                </div>
                @if(session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="card-body">
                    <form action="{{url('insert-category')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" name="slug">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" rows="3" class="form-control"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Popular</label>
                                <input type="checkbox" name="popular">
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Keywords</label>
                                <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" rows="3" class="form-control"></textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
          
        </section>
    </section>
</div>

@endsection