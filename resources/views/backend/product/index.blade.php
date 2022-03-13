@extends('backend.layouts.app')
@section('content')
<div class="container">
    <section id="main-content">
        <section class="wrapper site-min-height mt-5">
            <div class="card">
                <div class="card-header">
                    <h2>All Products</h2>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Original Price</th>
                            <th scope="col">Selling Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                          <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->selling_price}}</td>
                            <td>{{$product->original_price}}</td>
                            <td>
                                <img src="{{asset('assets/uploads/products/'.$product->image)}}" class="cat_image" alt="Image here">
                            </td>
                            <td>
                                <a href="{{url('edit-product/'.$product->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('delete-product/'.$product->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="row">
                          {{-- {{$products->links()}} --}}
                      </div>
                </div>
            </div>
          
        </section>
    </section>
</div>

@endsection