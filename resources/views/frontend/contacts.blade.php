@extends('frontend.app')

@section('content')
<div class="row" style="margin-top:-72px;margin-left:0px;margin-right:0px;height:680px;background: 
                                linear-gradient(to bottom,  rgb(18 18 18 / 47%) 60%, #F5F5F5 95%),
                                url({{asset('images/contactus.png')}}); background-position:center;">
    <div class="col-12" style="">
        <div class="carousel-caption text-left">
            <div class="row pt-5">
                <div class="col-md-8 pt-5">
                    <p class="fontbantitle"
                        style="font-family: 'Playfair Display', serif;font-size: 5vw;line-height:1;font-weight:bold;letter-spacing:10px;">
                        CONTACTS</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3 text-right">
            <p style="padding-top: 2.3vw;
    padding-right: 1.5vw;font-family: 'Playfair Display', serif;line-height:1;color:#D5AD6A;font-size:4.4vw;">Our Office</p>
        </div>
        <div class="col-md-9">
            <div class="row">
                @foreach($contacts as $key => $data)

                <div class="col-6 pr-4 pl-4 mt-5" style="border-left:4px solid #C72933">
                    <h3>{{$data->title ?? ''}}</h3>
                    <div class="teks-desc">
                    {!!$data->desc ?? ''!!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    <div class="row" style="margin-top:90px">
        <div class="col-md-3 text-right">
            <p style="padding-top: 2.3vw;
    padding-right: 1.5vw;font-family: 'Playfair Display', serif;line-height:1;color:#D5AD6A;font-size:4.4vw;">Map</p>
        </div>
        <div class="col-md-9" style="border-left: 4px solid #C72933">
            <div class="row">
                <div class="col-12 pr-4 pl-4">
                    @foreach($contacts as $key => $data)

                    {!!$data->embed_maps_link ?? ''!!}

                    <h3 class="mb-4">{{$data->title ?? ''}}</h3>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
