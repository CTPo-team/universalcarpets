@extends('layouts.app')
@section('title')
    About Us 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>About Us</h1>
        </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                @include('flash::message')
            </div>
        </div>
       <div class="card">
            <div class="card-body">
                @include('about_us_pages.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

