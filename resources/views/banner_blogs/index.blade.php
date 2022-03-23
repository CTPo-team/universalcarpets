@extends('layouts.app')
@section('title')
    Banner Blogs 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Banner Blogs</h1>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('banner_blogs.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

