@extends('layouts.app')
@section('title')
    Edit Setting Web 
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">Edit Setting Web</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('settingWebs.index') }}"  class="btn btn-primary">Back</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('flash::message')
                    </div>
                </div>
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                    {!! Form::model($settingWeb, ['route' => ['settingWebs.update', $settingWeb->id], 'method' => 'patch']) !!}
                                        <div class="row">
                                            @include('setting_webs.fields')
                                        </div>

                                    {!! Form::close() !!}
                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
@endsection
