@extends('layouts.app')
@section('title')
    About Us Details 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>About Us Details</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('aboutUsPages.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('about_us_pages.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
