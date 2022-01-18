@extends('frontend.app')

@section('content')
<style>

    .nav-tabs {
        border-bottom:none;
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link {
        color: #B7B7B7 !important;
        font-weight: bold;
        border-bottom: 2px solid #B7B7B7;
        border-bottom-width: medium;
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        border-left: none;
        border-right: none;
        border-top: none;
        color: #C72C36 !important;
        border-bottom: 2px solid #C72C36;
        border-bottom-width: medium;
    }

</style>
<div class="row" style="margin-top:-72px;margin-left:0px;margin-right:0px;height:680px;background: 
                                linear-gradient(to bottom,  rgb(66 61 64 / 30%) 60%, white 95%),
                                url({{asset('images/banneraboutus.png')}}); background-position:center;">
    <div class="col-12" style="">
        <div class="carousel-caption text-left">
            <div class="row pt-5">
                <div class="col-md-8">
                    <p class="fontbantitle"
                        style="font-family: 'Playfair Display', serif;font-size: 129px;line-height:1;font-weight:bold;letter-spacing:10px;">
                        ABOUT US</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
            <li class="nav-item col-4 text-center">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">OUR STORY</a>
            </li>
            <li class="nav-item col-4 text-center">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">NETWORK</a>
            </li>
            <li class="nav-item col-4 text-center">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false">TECHNOLOGIES</a>
            </li>
        </ul>
    </div>
</div>

<div class="tab-content" id="myTabContent">
    <!-- OUR STORY CONTENT -->
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row" style="margin-left:-15px;margin-right:-15px;">
            <div class="col-12" style="margin-top:90px">
                <img class="img-fluid" src="{{asset('images/aboutusimg.png')}}">
                <div class="aboutyt" style="position:absolute;right:100px;margin-top:-350px">
                    <iframe width="560" class="vaboutus" height="380" src="https://www.youtube.com/embed/NTSHN1BGd5c"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-6"  style="padding-right:0px">
                <div class="container">
                    <div class="row pt-4">
                        <div class="col"  style="padding-left:7vw">
                            {!! $ourStory->desc ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6"  style="padding-left:0px;padding-right:0px">
                <img class="img-fluid" src="{{asset('images/serti.png')}}">
            </div>
        </div>


        <!-- <div class="aboutyt text-right" style="position:absolute;right:0;z-index:98;padding-top:150px">
            <img class="img-fluid" src="{{asset('images/lineaboutus.png')}}" style="height:400px">
        </div> -->
        <div class="container">
            <div class="row pt-5">
                <div class="col-12 text-center p-5">
                    <p style="font-family: 'Playfair Display', serif;line-height:1;font-weight:bold;color:#D5AD6A;font-size:3vw">Our Strategy</p>
                </div>
            </div>
        </div>

        <div class="row pt-4 mb-5"
            style="background:url({{asset('images/ourstrategy.png')}});background-size: cover;background-position:right;  background-size: 95%;background-repeat:no-repeat;height:78vh;">
            <!-- <div class="container"> -->
                <div class="row text-white align-items-center" style="height:75vh;">
                    <div class="col-6">
                    </div>
                    <div class="col-4" style="font-size:1.3vw">
                        {!! $ourStory->our_strategy_desc ?? '' !!}
                    </div>
                </div>
            <!-- </div> -->

        </div>


    </div>

    <!-- NETWORK CONTENT -->
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row" style="margin-left:-15px;margin-right:-15px;">
            <div class="col-12" style="margin-top:90px">
                <img class="img-fluid" src="{{asset('images/aboutnetwork.png')}}">
            </div>
        </div>
        <div class="container pt-5">
            <div class="row justify-content-md-center">
                <div class="col-12" style="font-size:1.3vw">

                    {!! $network->desc ?? '' !!}
                </div>
            </div>
        </div>
        <div class="row" style="margin-left:-15px;margin-right:-15px;">
            <div class="col-12">
                <img class="img-fluid" src="{{asset('images/aboutnetworkline.png')}}">
            </div>
        </div>
    </div>

    <!-- TECHNOLOGIES -->
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div style="background:#0e0e0e">
        <div class="container pt-4 pb-4" style="margin-top:90px">
            <div class="row text-center p-3" style="color:#D5AD6A;font-size:2.7vw">
                {!! $technologies->short_desc ?? '' !!}
            </div>

        </div>
        </div>
     

        <div class="container pt-5">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-6 mt-3" style="padding-right:0px;padding-left:0px">
                    @foreach($aboutUsGalleryEven as $gallery)
                    <div class="col-12 mt-3" style="padding-right:0px;padding-left:0px">
                        <img class="img-fluid" src="{{asset('img/about/'.$gallery->path_image)}}" style="height:310px !important">
                    </div>
                    @endforeach
                </div>
                <div class="col-12 col-md-6 mt-5" style="padding-right:0px;padding-left:0px">
                    @foreach($aboutUsGalleryOdd as $gallery)
                    <div class="col-12 mt-3" style="padding-right:0px;padding-left:0px">
                        <img class="img-fluid" src="{{asset('img/about/'.$gallery->path_image)}}" style="height:310px !important">
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>

    </div>
</div>


@endsection
