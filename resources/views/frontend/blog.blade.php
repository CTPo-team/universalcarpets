@extends('frontend.app')

@section('content')
<div class="row" id="banner" style="margin-top:-72px;margin-left:0px;margin-right:0px;background: 
                                linear-gradient(to bottom, rgb(18 18 18 / 47%) 69%, #F5F5F5 99%),
                                url({{asset('images/bannerblog.png')}}); background-position:top;">
    <div class="col-12" style="">
        <div class="carousel-caption text-left">
            <div class="row pt-5">
                <div class="col-md-8">
                    <p class="fontbantitle-blog"
                        style="font-family: 'Playfair Display', serif;font-size: 6vw;line-height:1;font-weight:bold;letter-spacing:10px;">
                        Blog & Articles</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="padding-left:5.5vw;padding-right:5.5vw">
    <div class="row">
        <div class="col-md-6">
            <div class="row d-none d-sm-block" style="margin-right:0px;margin-left:0px">

                <div class="col-md-12" style="padding-left:0px;padding-right:0px">
                    <hr style="border-top:4px solid #889696;margin-top:30px">
                    <div style="width:12vw;margin-top:-27px;background:#F5F5F5;">
                        <p
                            style="font-family: 'Playfair Display', serif;font-size: 1.6vw;line-height:1;font-weight:bold;color:black">
                            WHATS NEW</p>
                    </div>

                </div>
            </div>
            <div class="row d-block d-sm-none" style="margin-right:0px;margin-left:0px">

                <div class="col-12" style="padding-left:0px;padding-right:0px">
                    <hr style="border-top:2px solid #889696;margin-top:30px">
                    <div style="width:19vw;margin-top:-27px;background:#F5F5F5;">
                        <p
                            style="font-family: 'Playfair Display', serif;font-size: 4vw;line-height:1;font-weight:bold;color:black">
                            WHATS NEW</p>
                    </div>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    @if(!empty($new))
                    <a href="{{ url('detail-blog/'.$new->slug) }}" style="text-decoration:none;">
                        <div class="card" style="width: 100%;background:#F1F3F5">
                            <img class="card-img-top" src="{{asset('img/blog/'.$new->path_image)}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                    {{$new->BlogCategory->title}}</h6>
                                <h3 class="card-subtitle pt-2 pb-2" style="color:#C72C36;font-weight:600">
                                    {{$new->title}}</h3>
                                <p class="card-text card-text-blog" style="font-size:1.3vw;color:black">{!!
                                    strlen(strip_tags($new->short_desc)) > 200 ?
                                    substr(strip_tags($new->short_desc),0,200).'...' : strip_tags($new->short_desc) !!}</p>
                            </div>
                        </div>
                    </a>
                    @else
                    <h1>No Data</h1>
                    @endif
                </div>
            </div>

        </div>
        <div class="col-md-1 d-none d-sm-block" style="padding-top:10vh;">
            <div style="height:100%;width:1px;border: 2px solid #D5AD6A;margin:auto;background-color: #D5AD6A;"></div>
        </div>
        <div class="col-md-5">
            <div class="row d-none d-sm-block" style="margin-right:0px;margin-left:0px">

                <div class="col-md-12" style="padding-left:0px;padding-right:0px">
                    <div>
                        <br>
                        <p
                            style="font-family: 'Playfair Display', serif;font-size: 1.6vw;line-height:1;font-weight:bold;color:black">
                            MOST VIEWED</p>
                    </div>
                </div>
            </div>

            <!-- mobile view -->
            <div class="row d-block d-sm-none pt-3" style="margin-right:0px;margin-left:0px">

                <div class="col-12" style="padding-left:0px;padding-right:0px">
                    <div>
                        <br>
                        <p
                            style="font-family: 'Playfair Display', serif;font-size: 4vw;line-height:1;font-weight:bold;color:black">
                            MOST VIEWED</p>
                    </div>
                </div>
            </div>
            <!-- end mobile view -->

            <div class="row d-none d-sm-block mt-4">
                @if(!empty($mostViewed))
                @foreach($mostViewed as $key => $data)
                <div class="col-12 pb-4">

                    <a href="{{ url('detail-blog/'.$data->slug) }}" style="text-decoration:none;">
                        <div class="card" style="width: 100%;flex-direction:row !important;height:12vw;border:none">
                            <img src="{{asset('img/blog/'.$data->path_image)}}" class="card-img" style="width:46%"
                                alt="...">
                            <div class="card-body">
                                <div class="row" style="height:100%">
                                    <div class="col-12 col-md-12">
                                        <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                            {{$data->BlogCategory->title}}</h6>
                                        <h4 class="card-subtitle pt-2 pb-2" style="color:#C72C36;font-weight:600">
                                            {{$data->title}}</h4>
                                        <p class="card-text texttabblog" style="font-size:14px;color:black">
                                            {!! strlen(strip_tags($data->short_desc)) > 200 ?
                                            substr(strip_tags($data->short_desc),0,200).'...'
                                            : strip_tags($data->short_desc) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </diV>
                @endforeach
                @else
                <h1>No Data</h1>
                @endif
            </div>

            <div class="row d-block d-sm-none mt-4">
                @if(!empty($mostViewed))
                @foreach($mostViewed as $key => $data)
                <div class="col-12 pb-4">

                    <a href="{{ url('detail-blog/'.$data->slug) }}" style="text-decoration:none;">
                        <div class="card" style="width: 100%;border:none">
                            <img src="{{asset('img/blog/'.$data->path_image)}}" class="card-img-top" style="width:100%"
                                alt="...">
                            <div class="card-body">
                            <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                            {{$data->BlogCategory->title}}</h6>
                                        <h4 class="card-subtitle pt-2 pb-2" style="color:#C72C36;font-weight:600">
                                            {{$data->title}}</h4>
                                        <p class="card-text texttabblog" style="font-size:14px;color:black">
                                            {!! strlen(strip_tags($data->short_desc)) > 200 ?
                                            substr(strip_tags($data->short_desc),0,200).'...'
                                            : strip_tags($data->short_desc) !!}
                                        </p>
                            </div>
                        </div>
                    </a>
                </diV>
                @endforeach
                @else
                <h1>No Data</h1>
                @endif
            </div>

        </div>
    </div>
    <hr class="hr-blog">
    <div class="row mt-5 mb-2">
        <div class="col-12">
            <p class="fontolderart"
                style="font-family: 'Playfair Display', serif;font-size: 1.6vw;line-height:1;font-weight:bold;color:black;letter-spacing:1.5px">
                OLDER ARTICLES</p>
        </div>
    </div>
    <div class="row">
        <div class="data-blog"></div>
    </div>

</div>




@endsection


@section('scripts')
<script>
    $(document).ready(function () {
        loadBlog();
    });

    function loadBlog() {
        var page = 1;
        $.ajax({
            url: "{!! url('older-blog') !!}",
            type: "GET",
            data: {
                page: page
            },
            success: function (response) {
                console.log(response)
                appendBlog(response.data)
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }

    function appendBlog(blog) {

        var classBlog = ".data-blog";
        var noDataBlog = false;

        if (blog.length > 0) {
            noDataBlog = false;

            blog.forEach(function (data) {
                $(classBlog).append("<a href='{{ url('detail-blog/'.$new->slug) }}' style='text-decoration:none;'><div class='col-12' style='padding-left:0px;padding-right:0px'>\
                <div class='card' style='width: 100%;border:none;background:transparent'>\
                <div class='card-body'><h6 class='card-subtitle' style='color:#D5AD6A;font-weight:600'>"+data.blog_category.title+"</h6>\
                <h3 class='card-subtitle pt-2 pb-2' style='color:#C72C36;font-weight:600'>" + data.title + "</h3>\
                <div class='card-text texttabblog' style='font-size:1.3vw;color:black'>"+data.short_desc+"</div>\
                </div>\
                </div>\
                </div></a>")
            });
        } else {
            noDataBlog = true
        }
    }

</script>
@endsection
