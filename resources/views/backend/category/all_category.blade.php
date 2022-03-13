@extends('backend.layouts.app')
@section('content')
<div class="container">
    <section id="main-content">
        <section class="wrapper site-min-height mt-5">
            <div class="card">
                <div class="card-header">
                    <h2>All Category</h2>
                </div>
            
                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $item)
                          <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                            <td>
                                <img src="{{asset('assets/uploads/category/'.$item->image)}}" class="cat_image" alt="Image here">
                            </td>
                            <td>
                                <a href="{{url('edit-category/'.$item->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="row">
                          {{$category->links()}}
                      </div>
                </div>
            </div>
          
        </section>
    </section>
</div>

@endsection