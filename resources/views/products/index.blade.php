@extends('layouts.app')
@section('title')
    Product 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('products.create')}}" class="btn btn-primary form-btn">Product <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                @include('flash::message')
            </div>
        </div>
       <div class="card">
            <div class="card-body">
                @include('products.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

