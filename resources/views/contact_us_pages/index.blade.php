@extends('layouts.app')
@section('title')
    Contact Us 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Contact Us</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('contactUsPages.create')}}" class="btn btn-primary form-btn">Contact Us<i class="fas fa-plus"></i></a>
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
                @include('contact_us_pages.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

