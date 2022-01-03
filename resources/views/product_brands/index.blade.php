@extends('layouts.app')
@section('title')
    Product Brand 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Brand</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('productBrands.create')}}" class="btn btn-primary form-btn">Product Brand <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('product_brands.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

