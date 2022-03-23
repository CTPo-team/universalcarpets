@extends('layouts.app')
@section('title')
    Banner Products 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Banner Products</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('bannerProducts.create')}}" class="btn btn-primary form-btn">Banner Product <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('banner_products.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

