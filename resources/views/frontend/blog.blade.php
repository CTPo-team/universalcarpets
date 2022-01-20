@extends('frontend.app')

@section('content')
<div class="row" style="margin-top:-72px;margin-left:0px;margin-right:0px;height:680px;background: 
                                linear-gradient(to bottom, rgb(18 18 18 / 47%) 69%, white 99%),
                                url({{asset('images/bannerblog.png')}}); background-position:top;">
    <div class="col-12" style="">
        <div class="carousel-caption text-left">
            <div class="row pt-5">
                <div class="col-md-8">
                    <p class="fontbantitle"
                        style="font-family: 'Playfair Display', serif;font-size: 129px;line-height:1;font-weight:bold;letter-spacing:10px;">
                        Blog & Articles</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="row d-none d-sm-block" style="margin-right:0px;margin-left:0px">

                <div class="col-md-12" style="padding-left:0px;padding-right:0px">
                    <hr style="border-top:2px solid black;margin-top:30px">
                    <div style="width:32%;margin-top:-27px;background:white;">
                        <p
                            style="font-family: 'Playfair Display', serif;font-size: 1.6vw;line-height:1;font-weight:bold;color:black">
                            WHATS NEW</p>
                    </div>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    @if(!empty($new))
                    <a href="{{ url('detail-blog/'.$new->slug) }}">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="{{asset('img/blog/'.$new->path_image)}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$new->title}}</h5>
                                <p class="card-text">{!! strlen(strip_tags($new->desc)) > 200 ?
                                    substr(strip_tags($new->desc),0,200).'...' : strip_tags($new->desc) !!}</p>
                            </div>
                        </div>
                    </a>
                    @else
                    <h1>No Data</h1>
                    @endif
                </div>
            </div>

        </div>
        <div class="col-md-2">

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
            <div class="row mt-4">
                <div class="col-12">
                    @if(!empty($mostViewed))
                    @foreach($mostViewed as $key => $data)
                    <a href="{{ url('detail-blog/'.$data->slug) }}">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="{{asset('img/blog/'.$data->path_image)}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$data->title}}</h5>
                                <p class="card-text">{!! strlen(strip_tags($data->desc)) > 200 ?
                                    substr(strip_tags($data->desc),0,200).'...'
                                    : strip_tags($data->desc) !!}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    @else
                    <h1>No Data</h1>
                    @endif
                </diV>
            </div>

        </div>
    </div>
    <div class="row mt-5">
      <div class="col-12">
        <h1>Older Articles</h1>
      </div>
    </div>
</div>




@endsection


@section('scripts')
<script>
    var page = 1
    $.ajax({
        url: "{!! url('older-blog') !!}",
        type: "GET",
        data: {
            page: page
        },
        success: function (response) {
            console.log(response)
        },
        error: function (xhr) {
            //Do Something to handle error
        }
    });

</script>
@endsection
