@extends('frontend.app')

@section('content')
@if(isset($banner) && !empty($banner))
    <div class="row" id="banner" style="margin-top:-72px;margin-left:0px;margin-right:0px;background: 
                                    linear-gradient(to bottom,  rgb(18 18 18 / 47%) 60%, #F5F5F5 95%),
                                    url({{$banner->path_image ?? ''}}); background-position:center;">
        <div class="col-12" style="">
            <div class="carousel-caption cap-carousel-blogcontact text-left">
                <div class="row pt-5 blogcontacttitlerow">
                    <div class="col-md-8">
                        <p class="fontbantitle-blog"
                            style="font-family: 'Playfair Display', serif;font-size: 6vw;line-height:1;font-weight:bold;letter-spacing:10px;">
                            {{$banner->title ?? ''}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="container">
    <div class="row">
        <div class="col-12 col-md-3 text-right">
        <p style="padding-top: 2.3vw;
    padding-right: 1.5vw;font-family: 'Playfair Display', serif;line-height:1;color:#D5AD6A;font-size:4.4vw;" 
    class="d-none d-md-block">Our Office</p>
    
     <p style="font-family: 'Playfair Display', serif;line-height:1;color:#D5AD6A;font-size:10vw;text-align:left" 
     class="d-block d-md-none pt-4 pb-4">Our Office</p>
        </div>
        <div class="col-12 col-md-9">
            <div class="row">
                @foreach($contacts as $key => $data)

                <div class="col-12 col-md-12 pr-4 pl-4 margin-contact" style="border-left:4px solid #C72933">
                    <div class="row">
                    <div class="col-12 col-md-5">
                    <h3 style="font-family: 'Playfair Display';font-weight:bold">{{$data->title ?? ''}}</h3>
                    <div class="teks-desc">
                    {!!$data->desc ?? ''!!}
                    </div>
                    </div>
                    <div class="col-12 col-md-7">
                    {!!$data->embed_maps_link ?? ''!!}
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
<!-- section contact us-->
<div class="sectionContact" style="padding-top:50px;padding-bottom:50px;background:url({{asset('images/linecontactus.png')}}); background-repeat: no-repeat;
background-size: cover;">
    <div class="container" style="padding-right:0px;padding-left:0px">
        <div class="row mt-4" style="margin-right:0px;margin-left:0px">
            <div class="col-md-12 ">
                <div class="card card-bgcontactus">
                    <div class="card-body">
                        <div class="row rowmobilecontact p-5">
                            <div class="col-12 col-md-6 align-self-center">
                                <div class="row justify-content-center">
                                    <div class="col tulisancontact" style="max-width:53%;">
                                        <p
                                            style="font-family: 'Playfair Display', serif;font-size: 40px !important;font-weight:bold;color:#C72C36">
                                            CONTACT US</p>
                                        <p>
                                            Submit your question and be the first to be notified to our latest
                                            collections
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-md-6">
                                @include('flash::message')
                                {!! Form::open(['url' => 'sendcontactus']) !!}
                                <div class="form-group row border-bottom" style="width:100%">
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="inputcontactus form-control"
                                            placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group row border-bottom" style="width:100%">
                                    <div class="col-sm-8">
                                        <input type="text" name="email" class="inputcontactus form-control"
                                            placeholder="Email Adress" required>
                                    </div>
                                </div>
                                <div class="form-group row border-bottom" style="width:100%">
                                    <div class="col-sm-9">
                                        <input type="number" name="phone" class="inputcontactus form-control"
                                            placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="form-group row border-bottom" style="width:100%">
                                    <div class="col-sm-9">
                                        <input type="text" name="message" class="inputcontactus form-control"
                                            placeholder="Message" required>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 text-right pt-3">
                                        <button type="submit" class="btn pl-5 pr-5 pt-2 pb-2"
                                            style="background:#D5AD6A;color:white;">
                                            SUBMIT
                                        </button>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end contact us -->  

    </div>
</div>



@endsection

@section("scripts")
    <script>
        $(document).ready(function () {
            $("iframe").width("100%");
            $("iframe").height("280px");
        });
    </script>
@endsection