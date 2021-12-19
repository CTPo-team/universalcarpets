@extends('layouts.app')
@section('title')
    Product Categories 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Categories</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('productCategories.create')}}" class="btn btn-primary form-btn">Product Category <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('product_categories.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

