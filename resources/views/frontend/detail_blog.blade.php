@extends('frontend.app')
@section('css')
<style>
    .navbar-light .navbar-nav .nav-link {
        color: #C62630 !important;
    }

    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .show>.nav-link {
        border-bottom: 2px solid #C72933;
    }

    .hr2 {
        border: 0;
        height: 3px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), #D5AD6A, rgba(0, 0, 0, 0));
    }

    @media only screen and (min-width: 1800px) {
        .cont-productpage {
            max-width: 1445px !important;
        }
    }

</style>
@endsection
@section('content')
<div class="container cont-productpage mt-5">
    <!-- judul -->
    <div class="row">
        <div class="col-12">
            <h5 style="color:#D2A55A"><b>{{$blog->blogCategory->title ?? ""}}</b></h5>
        </div>
        <div class="col-12 col-md-11">
            <p style="font-size:7.1vw;color:#C62630;line-height:1;font-family: 'Playfair Display', serif;">
                <b>{{$blog->title}}</b></p>
        </div>
        <div class="col-12">
            <p style="font-size:1vw"><b>{{$blog->updated_at->format('d F Y')}} by UNIVERSAL CARPET</b></p>
        </div>
    </div>

    <!-- gambar -->
    <div class="row mt-5">
        <div class="col-12"
            style="background:url({{asset('img/blog/'.$blog->path_image)}});background-size:cover;bacground-repeat:none;height:80vh;background-position:center">
        </div>
    </div>

    <!-- deskripsi -->
    <div class="row mt-5 mb-5">
        <div class="col-12" style="padding-left:0px;padding-right:0px;">
            {!! $blog->desc !!}
            <br>
            <div class="button text-left pt-3">
                <a href="">
                    <button type="button" class="btn pl-4 pr-4 pt-2 pb-2"
                        style="background:#D5AD6A;color:white;">SHARE</button>
                </a>
            </div>
        </div>
    </div>
    <hr class="hr2">
    <h1>Related Articles</h1>
    <div class="row">
        @foreach($relatedBlog as $key => $data)
            <div class="col-12 col-md-4" style="padding-right:3px;padding-left:3px">
                <div class="card" style="width: 100%;height:400px;">
                    <img src="{{asset('img/blog/'. $data->path_image )}}" height="210px" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <div class="row" style="height:150px">
                            <div class="col-12 col-md-9">
                                <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                    {!! $data->blogCategory->title !!}</h6>
                                <h5 class="card-title" style="color:#C72C36;font-weight:600">
                                    {!! $data->title !!}</h5>
                                <div class="card-text texttabblog" style="font-size:14px">
                                    {!! strlen(strip_tags($data->desc)) > 200 ?
                                    substr(strip_tags($data->desc),0,200).'...' : strip_tags($data->desc) !!}
                                </div>
                            </div>
                            <div class="col-12 col-md-3 text-center" style="padding-left:0px;padding-right:0px">
                                <a href="{{ url('detail-blog/'.$data->slug) }}" class="linktabblog"
                                    style="color:#C72C36;font-size:12px;position:absolute;bottom:0;left:10px;width:fit-content">Read
                                    more >></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection
