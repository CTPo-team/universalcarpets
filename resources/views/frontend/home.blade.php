@extends('frontend.app')

@section('content')

<!-- section banner -->
<div class="sectionBanner" style="margin-top:-72px">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($banner as $key => $data)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                <div class="d-block w-100" style="height:680px;background: 
                                linear-gradient(to bottom, transparent 60%, white 95%),
                                url({{asset('img/banner/'.$data->path_image)}});">
                    <!-- <div class="overlay">
                    </div> -->
                </div>
                <div class="carousel-caption text-left">
                    <div class="row pt-5">
                        <div class="col-md-8">
                            <p
                            class="fontbanctgr" style="font-family: 'Playfair Display', serif;font-size: 16px;line-height:1;font-weight:bold;letter-spacing:5px;color:#D5AD6A">
                                FEATURED COLLECTION</p>
                            <p
                            class="fontbantitle" style="font-family: 'Playfair Display', serif;font-size: 129px;line-height:1;font-weight:bold;letter-spacing:10px;">
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
        <div class="row" style="margin-right:0px;margin-left:0px">
            <div class="col-md-12 ">
                <div class="card card-bgabout">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-12 pt-4 pb-4 d-none d-sm-block">
                                <div class="row">
                                    <div class="col-md-7 col-12 text-center">
                                        <p><img class="img1abouthome" width="100%" src="{{asset('images/abouthome3.jpg')}}"></p>

                                        <p><img class="img2abouthome" width="100%" src="{{asset('images/abouthome2.jpg')}}"></p>
                                    </div>
                                    <div class="col-md-5 col-12 text-center" style="padding-left:0px">
                                        <img class="img3abouthome" width="100%" height="390px" src="{{asset('images/abouthome.png')}}">
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
                                            {!! strip_tags($AboutUs->short_desc) !!}
                                        </div>

                                    </div>
                                    <div class="row pt-5" style="bottom:40px;">
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
<div class="sectionCollection" style="padding-top:50px;padding-bottom:50px;">
    <div class="container">
        <!-- dekstop view -->
        <div class="row d-none d-sm-block" style="margin-right:0px;margin-left:0px">

            <div class="col-md-12">
                <hr style="border-top:1px solid black;margin-top:30px">
                <div style="width:20%;margin-top:-27px;background:white;">
                    <p
                        style="font-family: 'Playfair Display', serif;font-size: 30 !important;line-height:1;font-weight:bold;color:#C72C36">
                        NEW COLLECTIONS</p>
                </div>

            </div>
        </div>
        <div class="row mt-4 d-none d-sm-block">
            <div class="col-md-12 ">
                <div class="card card-bgnewcol">
                    <div class="card-body">
                        <div class="row pl-4 pr-4">
                            @foreach ($product as $newcol)
                            <div class="col-md-3 col-12 content" style="padding-right:3px;padding-left:3px">
                            <div class="content-overlay"></div>

                                <img width="100%" height="305px" class="tabnewcol"
                                    src="{{asset('img/product/'.$newcol->imageProductOne->path_image )}}">
                                <div class="content-details fadeIn-bottom">
                                <p class="content-text"> {!! $newcol->title !!}</p>
                                <br>
                                <a class="link-content-text">View Product</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center pt-3 pb-3">

                                <a class="btn pl-5 pr-5 pt-2 pb-2" style="background:#D5AD6A;color:white;"
                                    href="#">Browse All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- dekstop view end-->
        <!-- section collection mobile view -->
        <div class="row d-block d-sm-none" style="margin-right:0px;margin-left:0px">

            <div class="col-md-12">
                <hr style="border-top:1px solid black;margin-top:30px">
                <div style="width:20%;margin-top:-27px;background:white;">
                    <p
                        style="font-family: 'Playfair Display', serif;font-size: 30 !important;line-height:1;font-weight:bold;color:#C72C36">
                        NEW COLLECTIONS</p>
                </div>

            </div>
        </div>
        <div class="row mt-4  d-block d-sm-none" style="margin-right:0px;margin-left:0px">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-body">
                        <div id="productslider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($product as $key => $newcol)
                                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                    <img class="d-block w-100"
                                        src="{{asset('img/product/'.$newcol->imageProductOne->path_image )}}"
                                        alt="First slide">
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#productslider" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#productslider" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center pt-3 pb-3">

                                <a class="btn pl-5 pr-5 pt-2 pb-2" style="background:#D5AD6A;color:white;"
                                    href="#">Browse All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section collection mobile view end-->
    </div>
</div>
<!-- end section collection -->

<!-- section nice words-->
<div class="section" style="padding-top:90px;padding-bottom:90px;">
    <div class="row" style="margin-right:0px;margin-left:0px">
        <div class="col-12" style="padding-left:0px;padding-right:0px"> <img width="100%"
                src="{{asset('images/nicewords.png')}}"></div>
    </div>
</div>
<!-- end nice words -->

<!-- section blog-->
<div class="section" style="padding-top:50px;padding-bottom:50px;">
    <div class="container">
        <div class="row" style="margin-right:0px;margin-left:0px">

            <div class="col-md-12">
                <hr style="border-top:1px solid black;margin-top:30px">
                <div style="width:20%;margin-top:-27px;background:white;">
                    <p
                        style="font-family: 'Playfair Display', serif;font-size: 30 !important;line-height:1;font-weight:bold;color:#C72C36">
                        FROM OUR BLOG</p>
                </div>

            </div>
        </div>
        <!-- section blog dekstop view -->
        <div class="row mt-4 d-none d-sm-block">
            <div class="col-md-12 ">
                <div class="card card-bgnewcol">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-12 col-md-6" style="padding-right:3px;padding-left:3px">
                                        <div class="card" style="width: 100%;height:400px;">
                                            <img src="{{asset('img/blog/'. $blog[0]->path_image )}}" height="210px"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="row" style="height:150px">
                                                    <div class="col-12 col-md-9">
                                                        <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                                            {!! $blog[0]->blogCategory->title !!}</h6>
                                                        <h5 class="card-title" style="color:#C72C36;font-weight:600">
                                                            {!! $blog[0]->title !!}</h5>
                                                        <div class="card-text texttabblog" style="font-size:14px">
                                                        {!! strlen(strip_tags($blog[0]->desc)) > 200 ? substr(strip_tags($blog[0]->desc),0,200).'...' : strip_tags($blog[0]->desc) !!}</div>
                                                    </div>
                                                    <div class="col-12 col-md-3 text-center"
                                                        style="padding-left:0px;padding-right:0px">
                                                        <a href="#" class="linktabblog"
                                                            style="color:#C72C36;font-size:12px;position:absolute;bottom:0;left:10px;width:fit-content">Read
                                                            more >></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6" style="padding-right:3px;padding-left:3px">
                                        <div class="card" style="width: 100%;height:400px;">
                                            <img src="{{asset('img/blog/'. $blog[1]->path_image )}}" height="210px"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="row" style="height:150px">
                                                    <div class="col-12 col-md-9">
                                                        <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                                            {!! $blog[1]->blogCategory->title !!}</h6>
                                                        <h5 class="card-title" style="color:#C72C36;font-weight:600">
                                                            {!! $blog[1]->title !!}</h5>
                                                        <div class="card-text texttabblog" style="font-size:14px">
                                                            {!! strlen(strip_tags($blog[1]->desc)) > 200 ? substr(strip_tags($blog[1]->desc),0,200).'...' : strip_tags($blog[1]->desc) !!}</div>
                                                    </div>
                                                    <div class="col-12 col-md-3 text-center"
                                                        style="padding-left:0px;padding-right:0px">
                                                        <a href="#" class="linktabblog"
                                                            style="color:#C72C36;font-size:12px;position:absolute;bottom:0;left:10px;width:fit-content">Read
                                                            more >></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12" style="padding-right:3px;padding-left:3px">
                                        <div class="card"
                                            style="width: 100%;flex-direction:row !important;height:240px">
                                            <img src="{{asset('img/blog/'. $blog[2]->path_image )}}" class="card-img"
                                                style="width:46%" alt="...">
                                            <div class="card-body">
                                                <div class="row" style="height:100%">
                                                    <div class="col-12 col-md-9">
                                                        <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                                            {!! $blog[2]->blogCategory->title !!}</h6>
                                                        <h5 class="card-title" style="color:#C72C36;font-weight:600">
                                                            {!! $blog[2]->title !!}</h5>
                                                        <p class="card-text texttabblog" style="font-size:14px">
                                                            {!! strlen(strip_tags($blog[2]->desc)) > 200 ? substr(strip_tags($blog[2]->desc),0,200).'...' : strip_tags($blog[2]->desc) !!}</p>
                                                    </div>
                                                    <div class="col-12 col-md-3 text-center"
                                                        style="padding-left:0px;padding-right:0px">
                                                        <a href="#" class="linktabblog"
                                                            style="color:#C72C36;font-size:12px;position:absolute;bottom:0;left:10px;width:fit-content">Read
                                                            more >></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card" style="width: 100%;height:655px">
                                            <img src="{{asset('img/blog/'. $blog[3]->path_image )}}"
                                                class="card-img-top imgtabverticalblog" alt="...">
                                            <div class="card-body">
                                                <div class="row" style="height:100%">
                                                    <div class="col-12 col-md-9">
                                                        <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                                            {!! $blog[3]->blogCategory->title !!}</h6>
                                                        <h5 class="card-title" style="color:#C72C36;font-weight:600">
                                                            {!! $blog[3]->title !!}</h5>
                                                        <p class="card-text" style="font-size:15px">
                                                            {!! strlen(strip_tags($blog[3]->desc)) > 200 ? substr(strip_tags($blog[3]->desc),0,200).'...' : strip_tags($blog[3]->desc) !!}</p>
                                                    </div>
                                                    <div class="col-12 col-md-3 text-center"
                                                        style="padding-left:0px;padding-right:0px">
                                                        <a href="#" class="linktabblog"
                                                            style="color:#C72C36;font-size:12px;position:absolute;bottom:0;left:5px;width:fit-content">Read
                                                            more >></a>
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
        </div>
        <!-- section blog dekstop view -->
        <!-- section blog mobile view -->

        <div class="row mt-4  d-block d-sm-none" style="margin-right:0px;margin-left:0px">
            <div class="col-md-12 ">
                <div class="card card-bgnewcol">
                    <div class="card-body">
                        <div id="blogSlidermob" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($blog as $key => $blogs)
                                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                    <div class="card" style="width: 100%;height:400px;">
                                        <img src="{{asset('img/blog/'. $blogs->path_image )}}" height="210px"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <div class="row" style="height:150px">
                                                <div class="col-12 col-md-9">
                                                    <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                                        {!! $blogs->blogCategory->title !!}</h6>
                                                    <h5 class="card-title" style="color:#C72C36;font-weight:600">
                                                        {!! $blogs->title !!}</h5>
                                                    <p class="card-text" style="font-size:14px">
                                                        {!! $blogs->desc !!}</p>
                                                </div>
                                                <div class="col-12 col-md-3 text-center"
                                                    style="padding-left:0px;padding-right:0px">
                                                    <a href="#" class=""
                                                        style="color:#C72C36;font-size:12px;position:absolute;bottom:0;left:10px;width:fit-content">Read
                                                        more >></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#blogSlidermob" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#blogSlidermob" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section blog mobile view end-->

    </div>
</div>
<!-- end blog -->

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
                                            CONTACTS</p>
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
 
@endsection
