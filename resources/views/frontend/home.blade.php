@extends('frontend.app')

@section('content')
<!-- style home -->
<style>
    .carousel-caption {
        right: auto !important;
        bottom: auto !important;
        top: 17%;
        left: 7%;
    }

    .carousel-indicators {
        right: auto !important;
        margin-left: 7%;
    }

    .card-bgabout {
        background: linear-gradient(to left, rgba(255, 0, 0, 0), #F1F3F5);
        border: none;
    }

    .card-bgnewcol {
        background: linear-gradient(to bottom, rgba(255, 0, 0, 0) 50%, #F1F3F5 74%);
        border: none;
    }

    /* .overlay {
        position: absolute;
        background-color: black;
        height: 100%;
        width: 100%;
        opacity: 0.1;
    } */

</style>
<!-- end style home -->

<!-- section banner -->
<div class="sectionBanner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($banner as $data)
            <div class="carousel-item active">
                <div class="d-block w-100" style="height:680px;background: 
   linear-gradient(to bottom, transparent 50%, white 95%),
   url({{asset('img/banner/'.$data->path_image)}});">
                    <!-- <div class="overlay">
                    </div> -->
                </div>
                <div class="carousel-caption d-none d-md-block text-left">
                    <div class="row">
                        <div class="col-md-8">
                            <p
                                style="font-family: 'Playfair Display', serif;font-size: 26 !important;line-height:1;font-weight:bold;letter-spacing:5px;color:#D5AD6A">
                                FEATURED COLLECTION</p>
                            <p
                                style="font-family: 'Playfair Display', serif;font-size: 129px !important;line-height:1;font-weight:bold;letter-spacing:10px;">
                                {{$data->title}}</p>
                        </div>
                    </div>
                    <br>
                    <p><a class="btn btn-danger pl-5 pr-5 pt-2 pb-2" href="{{$data->button_url}}">VIEW PRODUCT</a></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end section banner -->

<!-- section about -->
<div class="sectionAbout" style="padding-top:50px;padding-bottom:50px;background:url({{asset('images/lineabouthome.png')}}); background-repeat: no-repeat;
  background-size: cover;">
    <div class="container" style="padding-right:0px;padding-left:0px">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card card-bgabout">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-12 pt-4 pb-4">
                                <div class="row">
                                    <div class="col-md-7 col-12 text-center">
                                        <p><img width="100%" src="{{asset('images/abouthome3.jpg')}}"></p>

                                        <p><img width="100%" src="{{asset('images/abouthome2.jpg')}}"></p>
                                    </div>
                                    <div class="col-md-5 col-12 text-center" style="padding-left:0px">
                                        <img width="100%" height="405px" src="{{asset('images/abouthome.png')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 pt-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p
                                                style="font-size:44px;font-weight:bold;color:#C72C36;font-family: 'Playfair Display', serif;font-size:bold;">
                                                OUR STORY
                                            </p>
                                        </diV>
                                        <div class="col-md-12">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac
                                                massa sit amet
                                                nulla semper volutpat cursus nec dolor. Nunc mollis tincidunt justo,
                                                viverra
                                                vehicula est laoreet vel. Donec ac pellentesque eros. In sit amet nisi
                                                leo. Mauris
                                                sit amet mauris a ligula sodales efficitur at ut tortor. Maecenas eu
                                                purus cursus,
                                                laoreet ante sed, ornare metus. Etiam sit amet maximus ante.
                                            </p>
                                        </div>

                                    </div>
                                    <div class="row" style="bottom:40px;position:absolute;right:40px">
                                        <div class="col text-right">
                                            <a class="btn pl-5 pr-5 pt-2 pb-2" style="background:#D5AD6A;color:white;"
                                                href="">ABOUT US</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section about -->

<!-- section collection-->
<div class="section" style="padding-top:50px;padding-bottom:50px;">
    <div class="container" style="padding-right:0px;padding-left:0px">
        <div class="row">
         
            <div class="col-md-12">
            <hr  style="border-top:1px solid black;margin-top:30px">
            <div style="width:20%;margin-top:-27px;background:white;">
            <p
                                style="font-family: 'Playfair Display', serif;font-size: 30 !important;line-height:1;font-weight:bold;color:#C72C36">
                                NEW COLLECTIONS</p>
            </div>
            
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 ">
                <div class="card card-bgnewcol">
                    <div class="card-body">
                        <div class="row pl-4 pr-4">
                             <div class="col-md-3 col-12" style="padding-right:3px;paddingleft:3px">
                             <img width="100%" height="305px" src="{{asset('images/newcol3.png')}}">
                            </div>

                            <div class="col-md-3 col-12" style="padding-right:3px;paddingleft:3px">
                             <img width="100%" height="305px" src="{{asset('images/newcol2.png')}}">
                            </div>

                            <div class="col-md-3 col-12" style="padding-right:3px;paddingleft:3px">
                             <img width="100%" height="305px" src="{{asset('images/newcol4.png')}}">
                            </div>

                            <div class="col-md-3 col-12" style="padding-right:3px;paddingleft:3px">
                             <img width="100%" height="305px" src="{{asset('images/newcol1.png')}}">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center pt-3 pb-3">

                            <a class="btn pl-5 pr-5 pt-2 pb-2" style="background:#D5AD6A;color:white;" href="#">Browse All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section collection -->

<!-- section nice words-->
<div class="section" style="padding-top:50px;padding-bottom:50px;">
        <div class="row" style="margin-right:0px;margin-left:0px">
         <div class="col-12" style="padding-left:0px;padding:right:0px"> <img width="100%" src="{{asset('images/nicewords.png')}}"></div>
        </div>
</div>
<!-- end nice words -->
@endsection
