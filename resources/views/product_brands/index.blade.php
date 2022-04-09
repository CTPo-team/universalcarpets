@extends('layouts.app')
@section('title')
    Product Brand 
@endsection
@section('content')
<style>
    .card{
        width: 50vw;
        margin: 0 auto;
        float: none;
    }
    @media only screen and (max-width: 600px) {
        .card{
            width: auto;
            padding-top: 20px;
            padding-bottom: 20px;
        }
    }
</style>
    <section class="section">
        <div class="section-header">
            <h1>Product Brand</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('productBrands.create')}}" class="btn btn-primary form-btn">Product Brand <i class="fas fa-plus"></i></a>
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
                @include('product_brands.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

