@extends('layouts.app')
@section('title')
    Users 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Users</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('users.create')}}" class="btn btn-primary form-btn">Users <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                @include('flash::message')
            </div>
        </div>
       <div class="card">
            <div class="card-body">
                @include('users.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

