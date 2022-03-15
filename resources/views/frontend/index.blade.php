@extends('layouts.front')

@section('title')
    Shop-99
@endsection

@section('content')
@include('layouts.slider')
<div class="py-5">
    <div class="container">
        <div class="row">
                 <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_product as $product)
                    <div class="item">
                        <div class="card">
                            <img src="{{asset('assets/uploads/products/'.$product->image)}}" class="cat_image" alt="Image here">
                            <div class="card-body">
                                <h5>{{$product->name}}</h5>
                                <small> &#2547;{{$product->selling_price}}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                 </div>
              </div>
            </div>
        </div>  
@endsection


@section('scripts')

<script>
    $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>

@endsection