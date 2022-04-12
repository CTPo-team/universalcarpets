@extends('frontend.app')

@section('content')

<!-- section banner -->
<div class="sectionBanner" style="margin-top:-72px">
    <div class="owl-carousel owl-theme owl-loaded">
                @foreach($banner as $key => $dt)
               
                    <div class="item itembanner" style="margin-top:0px;height:90vh;background: 
                                linear-gradient(to bottom, transparent 60%, #F5F5F5 95%),
                                url('{{$dt['path_image'] ?? ''}}');background-size:cover;width:100vw !important">
                                 <a  href="{{$dt['button_url'] ?? ''}}" style="text-decoration:none">
                        <div class="carousel-caption text-left">
                            <div class="row pt-5">
                                <div class="col-md-8 pt-2">
                                    <p
                                    class="fontbanctgr" style="font-family: 'Playfair Display', serif;font-size: 16px;line-height:1;font-weight:bold;letter-spacing:5px;color:#D5AD6A">
                                        {{$dt['category'] ?? ''}}</p>
                                    <p
                                    class="fontbantitle" style="font-family: 'Playfair Display', serif;font-size: 6vw;line-height:1;font-weight:bold;letter-spacing:10px;color:white;">
                                        {{$dt['title'] ?? ''}}</p>
                                </div>
                            </div>
                            <br>
                            <p><a class="btn btn-danger pl-5 pr-5 pt-2 pb-2" href="{{$dt['button_url'] ?? ''}}">{{$dt['button_title'] ?? ''}}</a></p>
                        </div>
                        </a>
                    </div>
                
                @endforeach
    </div>
</div>
<!-- end section banner -->

<!-- section about -->
<div class="sectionAbout" style="padding-top:50px;padding-bottom:50px;background:url({{asset('images/lineabouthome.png')}});">
    <div class="container" style="padding-right:0px;padding-left:0px">
        <div class="row" style="margin-right:0px;margin-left:0px">
            <div class="col-md-12 ">
                <div class="card card-bgabout">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-12 pt-4 pb-4 d-none d-sm-block">
                                <div class="row">
                                    <div class="col-md-7 col-12 text-center">
                                        @if(isset($aboutUs->path_image_home[0]))
                                            <p><img class="img1abouthome imgatashome" width="100%" src="{{$aboutUs->path_image_home[0]}}"></p>
                                        @endif
                                        @if(isset($aboutUs->path_image_home[1]))
                                            <p><img class="img2abouthome imgatashome" width="100%" src="{{asset($aboutUs->path_image_home[1])}}"></p>
                                        @endif
                                        </div>
                                    <div class="col-md-5 col-12 text-center" style="padding-left:0px">
                                        @if(isset($aboutUs->path_image_home[2]))
                                            <img class="img3abouthome" width="100%" height="390px" src="{{asset($aboutUs->path_image_home[2])}}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 pt-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p
                                                style="font-size:3.5vh;font-weight:bold;color:#C72C36;font-family: 'Playfair Display', serif;font-size:bold;">
                                                OUR STORY
                                            </p>
                                        </diV>
                                        <div class="col-md-12">
                                            {!! strip_tags($aboutUs->short_desc) !!}
                                        </div>

                                    </div>
                                    <div class="row pt-5" style="bottom:40px;">
                                        <div class="col text-right">
                                            <a class="btn pl-5 pr-5 pt-2 pb-2" style="background:#D5AD6A;color:white;"
                                                href="{{url('aboutus')}}">ABOUT US</a>
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
                <div style="width:20%;margin-top:-27px;background:#F5F5F5;">
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
                                @if(!empty($newcol->path_image[0])) 
                                <div class="col-md-3 col-12 content" style="padding-right:3px;padding-left:3px">
                                <div class="content-overlay"></div>

                                    <img width="100%" height="305px" class="tabnewcol"
                                        src="{{$newcol->path_image[0]}}">
                                    <div class="content-details fadeIn-bottom">
                                    <p class="content-text"> {!! $newcol->title !!}</p>
                                    <br>
                                    <a class="link-content-text" href="{{ url('detail-product/'.$newcol->slug) }}">View Product</a>
                                    </div>
                                </div>
                                @else
                                <div class="col-md-3 col-12 content" style="padding-right:3px;padding-left:3px">
                                <div class="content-overlay"></div>

                                    <img width="100%" height="305px" class="tabnewcol"
                                        src="">
                                    <div class="content-details fadeIn-bottom">
                                    <p class="content-text"> {!! $newcol->title !!}</p>
                                    <br>
                                    <a class="link-content-text" href="{{ url('detail-product/'.$newcol->slug) }}">View Product</a>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center pt-3 pb-3">

                                <a class="btn pl-5 pr-5 pt-2 pb-2" style="background:#D5AD6A;color:white;"
                                    href="{{url('product')}}">Browse All</a>
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
                <div style="width:20%;margin-top:-27px;background:#F5F5F5;">
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
                                @if(isset($newcol->path_image[0])) 
                                <div class="carousel-item contenthome {{$key == 0 ? 'active' : '' }}">
                                <div class="content-overlayhome"></div>
                                    <img class="d-block w-100"
                                        src="{{$newcol->path_image[0]}}"
                                        alt="First slide">

                                        <div class="content-detailshome fadeIn-bottom">
                                        <p class="content-texthome fonttittle-overlay" style="font-size:3vw">{!! $newcol->title !!}</p>
                                        <a class="link-content-texthome fontlink-overlay" style="font-size:1.5vw" href="{{ url('detail-product/'.$newcol->slug) }}">View Product</a>
                                        </div>
                                </div>
                                @else
                                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                    <img class="d-block w-100"
                                        src=""
                                        alt="First slide">
                                </div>
                                @endif
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
<div class="sectionWords" style="padding-top:90px;padding-bottom:90px;background:url({{asset('images/linebringing.png')}});">

    <div class="row" style="margin-right:0px;margin-left:0px">
        <div class="col-12 text-center" style="padding-left:0px;padding-right:0px"> 
            <img class="thumbnail img-bringing"
                src="{{asset('images/nicewords.png')}}" alt="...">
        </div>
    </div>
</div>
<!-- end nice words -->

<!-- section blog-->
<div class="section" style="padding-top:50px;padding-bottom:50px;">
    <div class="container">
        <div class="row" style="margin-right:0px;margin-left:0px">

            <div class="col-md-12">
                <hr style="border-top:1px solid black;margin-top:30px">
                <div class="d-none d-sm-block" style="width:20%;margin-top:-27px;background:#F5F5F5;">
                    <p
                        style="font-family: 'Playfair Display', serif;font-size: 30 !important;line-height:1;font-weight:bold;color:#C72C36">
                        FROM OUR BLOG</p>
                </div>
                <div class="d-block d-sm-none" style="width:27%;margin-top:-27px;background:#F5F5F5;">
                    <p
                        style="font-family: 'Playfair Display', serif;font-size: 30 !important;line-height:1;font-weight:bold;color:#C72C36">
                        FROM<br>OUR BLOG</p>
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
                                    @if(isset($blog[0]))
                                    <div class="col-12 col-md-6" style="padding-right:3px;padding-left:3px">
                                        <div class="card" style="width: 100%;height:400px;">
                                            <img src="{{asset($blog[0]->path_image)}}" height="210px"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="row" style="height:150px">
                                                    <div class="col-12 col-md-9">
                                                        <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                                            {!! $blog[0]->blogCategory->title !!}</h6>
                                                        <h5 class="card-title" style="color:#C72C36;font-weight:600">
                                                            {!! $blog[0]->title !!}</h5>
                                                        <div class="card-text texttabblog" style="font-size:14px">
                                                        {!! strlen(strip_tags($blog[0]->desc)) > 100 ? substr(strip_tags($blog[0]->desc),0,100).'...' : strip_tags($blog[0]->desc) !!}</div>
                                                    </div>
                                                    <div class="col-12 col-md-3 text-center"
                                                        style="padding-left:0px;padding-right:0px">
                                                        <a href="{{ url('detail-blog/'.$blog[0]->slug) }}" class="linktabblog"
                                                            style="color:#C72C36;font-size:12px;position:absolute;bottom:0;left:10px;width:fit-content">Read
                                                            more >></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @if(isset($blog[1]))
                                    <div class="col-12 col-md-6" style="padding-right:3px;padding-left:3px">
                                        <div class="card" style="width: 100%;height:400px;">
                                            <img src="{{asset($blog[1]->path_image)}}" height="210px"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="row" style="height:150px">
                                                    <div class="col-12 col-md-9">
                                                        <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                                            {!! $blog[1]->blogCategory->title !!}</h6>
                                                        <h5 class="card-title" style="color:#C72C36;font-weight:600">
                                                            {!! $blog[1]->title !!}</h5>
                                                        <div class="card-text texttabblog" style="font-size:14px">
                                                            {!! strlen(strip_tags($blog[1]->desc)) > 100 ? substr(strip_tags($blog[1]->desc),0,100).'...' : strip_tags($blog[1]->desc) !!}</div>
                                                    </div>
                                                    <div class="col-12 col-md-3 text-center"
                                                        style="padding-left:0px;padding-right:0px">
                                                        <a href="{{ url('detail-blog/'.$blog[1]->slug) }}" class="linktabblog"
                                                            style="color:#C72C36;font-size:12px;position:absolute;bottom:0;left:10px;width:fit-content">Read
                                                            more >></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="row mt-3">
                                    @if(isset($blog[2]))
                                    <div class="col-md-12" style="padding-right:3px;padding-left:3px">
                                        <div class="card"
                                            style="width: 100%;flex-direction:row !important;height:240px">
                                            <img src="{{asset($blog[2]->path_image)}}" class="card-img"
                                                style="width:46%" alt="...">
                                            <div class="card-body">
                                                <div class="row" style="height:100%">
                                                    <div class="col-12 col-md-9">
                                                        <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                                            {!! $blog[2]->blogCategory->title !!}</h6>
                                                        <h5 class="card-title" style="color:#C72C36;font-weight:600">
                                                            {!! $blog[2]->title !!}</h5>
                                                        <p class="card-text texttabblog" style="font-size:14px">
                                                            {!! strlen(strip_tags($blog[2]->desc)) > 100 ? substr(strip_tags($blog[2]->desc),0,100).'...' : strip_tags($blog[2]->desc) !!}</p>
                                                    </div>
                                                    <div class="col-12 col-md-3 text-center"
                                                        style="padding-left:0px;padding-right:0px">
                                                        <a href="{{ url('detail-blog/'.$blog[2]->slug) }}" class="linktabblog"
                                                            style="color:#C72C36;font-size:12px;position:absolute;bottom:0;left:10px;width:fit-content">Read
                                                            more >></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                @if(isset($blog[3]))
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card" style="width: 100%;height:655px">
                                            <img src="{{asset($blog[3]->path_image)}}"
                                                class="card-img-top imgtabverticalblog" alt="...">
                                            <div class="card-body">
                                                <div class="row" style="height:100%">
                                                    <div class="col-12 col-md-9">
                                                        <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                                            {!! $blog[3]->blogCategory->title !!}</h6>
                                                        <h5 class="card-title" style="color:#C72C36;font-weight:600">
                                                            {!! $blog[3]->title !!}</h5>
                                                        <p class="card-text" style="font-size:15px">
                                                            {!! strlen(strip_tags($blog[3]->desc)) > 300 ? substr(strip_tags($blog[3]->desc),0,300).'...' : strip_tags($blog[3]->desc) !!}</p>
                                                    </div>
                                                    <div class="col-12 col-md-3 text-center"
                                                        style="padding-left:0px;padding-right:0px">
                                                        <a href="{{ url('detail-blog/'.$blog[3]->slug) }}" class="linktabblog"
                                                            style="color:#C72C36;font-size:12px;position:absolute;bottom:0;left:5px;width:fit-content">Read
                                                            more >></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- section blog dekstop view -->
        <!-- section blog mobile view -->

        <div class="row mt-4  d-block d-sm-none" style="margin-right:0px;margin-left:0px">
            @if(isset($blog))
            <div class="col-md-12 ">
                <div class="card card-bgnewcol">
                    <div class="card-body">
                        <div id="blogSlidermob" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($blog as $key => $blogs)
                                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                    <div class="card" style="width: 100%;height:400px;">
                                        <img src="{{$blogs->path_image}}" height="210px"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <div class="row" style="height:150px">
                                                <div class="col-12 col-md-9">
                                                    <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                                        {!! $blogs->blogCategory->title !!}</h6>
                                                    <h5 class="card-title" style="color:#C72C36;font-weight:600">
                                                        {!! $blogs->title !!}</h5>
                                                    <p class="card-text" style="font-size:14px">
                                                    {!! strlen(strip_tags($blogs->desc)) > 100 ? substr(strip_tags($blogs->desc),0,100).'...' : strip_tags($blogs->desc) !!}</p>
                                                </div>
                                                <div class="col-12 col-md-3 text-center"
                                                    style="padding-left:0px;padding-right:0px">
                                                    <a href="{{ url('detail-blog/'.$blogs->slug) }}" class=""
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
            @endif
        </div>
        <!-- section blog mobile view end-->

    </div>
</div>
<!-- end blog -->
 
@endsection

@section("scripts")
    <script>
        $(document).ready(function () {
            var $el = $('.sectionAbout');
            var $al = $('.sectionWords');
            $(window).on('scroll', function () {
                var scroll = $(document).scrollTop();
                $el.css({
                    'background-position':'50% '+(-.4*scroll)+'px'
                });
                $al.css({
                    'background-position':'50% '+(.077*scroll)+'px'
                });
            });

            $('.owl-carousel').owlCarousel({
                loop: $('.owl-carousel .item').length > 1 ? true : false,
                margin:1,
                autoplay:true,
                autoWidth:true,
                nav:true,
                items:1,
                navText : ['<span class="carousel-control-prev-icon" aria-hidden="true"></span>','<span class="carousel-control-next-icon" aria-hidden="true"></span>']
            })
        });
      
    </script>
@endsection
