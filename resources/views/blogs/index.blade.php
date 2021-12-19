@extends('layouts.app')
@section('title')
    Blog 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Blog</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('blogs.create')}}" class="btn btn-primary form-btn">Blog <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('blogs.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

