@extends('layouts.app')
@section('title')
    Setting Web 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Setting Web</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('settingWebs.create')}}" class="btn btn-primary form-btn">Setting Web <i class="fas fa-plus"></i></a>
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
                @include('setting_webs.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

