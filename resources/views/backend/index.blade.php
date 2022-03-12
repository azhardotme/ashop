@extends('backend.layouts.app')
@section('content')
<div class="container">
    <section id="main-content">
        <section class="wrapper site-min-height mt-5">
            <!-- page start-->
            <h1>Dashboard</h1>
            <!-- page end-->
        </section>
        @if(session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
    </section>
</div>

@endsection