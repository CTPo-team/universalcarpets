@extends('layouts.app')
@section('title')
    Roles 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Roles</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('roles.create')}}" class="btn btn-primary form-btn">Roles <i class="fas fa-plus"></i></a>
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
                @include('roles.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

