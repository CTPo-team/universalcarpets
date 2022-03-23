@extends('layouts.app')
@section('title')
    Banner Contactus 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Banner Contact Us</h1>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('banner_contactus.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

