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
    <div class="row d-none d-sm-block">
        <div class="col-12">
            <h5 style="color:#D2A55A"><b>{{$blog->blogCategory->title ?? ""}}</b></h5>
        </div>
        <div class="col-12 col-md-11">
            <p style="font-size:3vw;color:#C62630;line-height:1;font-family: 'Playfair Display', serif;">
                <b>{{$blog->title}}</b></p>
        </div>
        <div class="col-12">
            <p style="font-size:1vw"><b>{{$blog->updated_at->format('d F Y')}} by UNIVERSAL CARPET</b></p>
        </div>
    </div>
    <!-- judul mobile-->
    <div class="row d-block d-sm-none">
        <div class="col-12">
            <h5 style="color:#D2A55A;font-size:6vw"><b>{{$blog->blogCategory->title ?? ""}}</b></h5>
        </div>
        <div class="col-12 col-md-11">
            <p style="font-size:11vw;color:#C62630;line-height:1;font-family: 'Playfair Display', serif;">
                <b>{{$blog->title}}</b></p>
        </div>
        <div class="col-12">
            <p style="font-size:3vw"><b>{{$blog->updated_at->format('d F Y')}} by UNIVERSAL CARPET</b></p>
        </div>
    </div>

    <!-- gambar -->
    <div class="row mt-5">
        <div class="col-12 imgblog-mobile"
            style="background:url({{$blog->path_image}});background-size:cover;background-repeat:none;height:80vh;background-position:center">
        </div>
    </div>

    <!-- deskripsi -->
    <div class="row d-none d-sm-block mt-5 mb-5">
        <div class="col-12" style="padding-left:0px;padding-right:0px;">
            {!! $blog->desc !!}
            <br>
            <div class="button text-left pt-3">
                    <button type="button" class="btn pl-4 pr-4 pt-2 pb-2"
                        style="background:#D5AD6A;color:white;" onclick="copyToClipboard('{{url("detail-blog/".$blog->slug) }}')">SHARE</button>
            </div>
        </div>
    </div>
     <!-- mobile deskripsi -->
     <div class="row d-block d-sm-none mt-5 mb-5">
        <div class="col-12">
            {!! $blog->desc !!}
            <br>
            <div class="button text-left pt-3">
                    <button type="button" class="btn pl-4 pr-4 pt-2 pb-2"
                        style="background:#D5AD6A;color:white;" onclick="copyToClipboard('{{url("detail-blog/".$blog->slug) }}')">SHARE</button>
            </div>
        </div>
    </div>
    <hr class="hr2">
    <h1>Related Articles</h1>
    <div class="row">
        @foreach($relatedBlog as $key => $data)
            <div class="col-6 col-md-4 pt-3" style="padding-right:3px;padding-left:3px">
                <div class="card" style="width: 100%;">
                    <img src="{{$data->path_image}}" style="max-height:300px" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-9">
                                <h6 class="card-subtitle" style="color:#D5AD6A;font-weight:600">
                                    {!! $data->blogCategory->title !!}</h6>
                                <h5 class="card-title" style="color:#C72C36;font-weight:600">
                                    {!! $data->title !!}</h5>
                                <div class="card-text texttabblog" style="font-size:14px">
                                    {!! strlen(strip_tags($data->desc)) > 100 ?
                                    substr(strip_tags($data->desc),0,100).'...' : strip_tags($data->desc) !!}
                                </div>
                            </div>
                            <div class="col-12 col-md-3 text-center" style="padding-left:0px;padding-right:0px;padding-top:7vw">
                                <a href="{{ url('detail-blog/'.$data->slug) }}" class="linktabblog-det"
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

@section("scripts")
    <script>
        function copyToClipboard(text) {
            var aux = document.createElement("input");
            aux.setAttribute("value", text);
            document.body.appendChild(aux);
            aux.select();
            document.execCommand("copy");
            document.body.removeChild(aux);
            alert("URL Copied.");
        }
    </script>
@endsection