@extends('layouts.app')
@section('title')
    Banner Aboutus 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Banner About Us</h1>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('banner_aboutus.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

