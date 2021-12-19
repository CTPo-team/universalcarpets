@extends('layouts.app')
@section('title')
    Blog Category 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Blog Category</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('blogCategories.create')}}" class="btn btn-primary form-btn">Blog Category <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('blog_categories.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

