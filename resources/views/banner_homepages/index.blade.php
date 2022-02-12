@extends('layouts.app')
@section('title')
    Banner Homepage 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Banner Homepage</h1>
        </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                @include('flash::message')
            </div>
        </div>
       <div class="card">
            <div class="card-body">
                @include('banner_homepages.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

