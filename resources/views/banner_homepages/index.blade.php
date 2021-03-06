@extends('layouts.app')
@section('title')
    Banner Homepage 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Banner Homepage</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('bannerHomepages.create')}}" class="btn btn-primary form-btn">Banner Homepage <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('banner_homepages.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

