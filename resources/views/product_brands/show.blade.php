@extends('layouts.app')
@section('title')
    Product Brand Details 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Product Brand Details</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('productBrands.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('product_brands.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
