@extends('layouts.app')
@section('title')
    About Us 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>About Us</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('aboutUsPages.create')}}" class="btn btn-primary form-btn">About Us <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('about_us_pages.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

