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

    @media only screen and (min-width: 1800px) {
        .cont-productpage {
            max-width: 1445px !important;
        }
    }

</style>
@endsection
@section('content')
<div class="container cont-productpage pt-4">
    @if(isset($product->imageProduct) && count($product->imageProduct) > 0)
    <div class="row align-items-center justify-content-center"
        style="margin-top:0px;height:65vh;background: 
                                linear-gradient(to bottom, rgb(52 52 52 / 35%) 100%, #F5F5F5 100%),
                                url({{asset('img/product/'.$product->imageProduct[0]->path_image)}});background-size:cover;">
        <div class="col-12 col-md-6 text-center text-white">
            <p class="fontbantitle"
                style="text-transform: uppercase;font-family: 'Playfair Display', serif;font-size: 12.6vh;line-height:1;font-weight:bold;letter-spacing:10px;">
                {{$product->title ?? ""}}</p>
        </div>
    </div>
    @endif

    <div class="row justify-content-center mt-5">
        <div class="col-md-5">{!! $product->desc !!}</div>
        <div class="col-md-5">
            @if(isset($product->imageProduct) && count($product->imageProduct) > 0)
            @foreach($product->imageProduct as $key => $data)
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" style="height:30vw" src="{{asset('img/product/'.$data->path_image)}}"
                            alt="First slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 pt-5" style="padding-left:0px;padding-right:0px;">
            <h4>RELATED PRODUCT</h4>
        </div>
    </div>
    <div class="row" style="margin-top:0px;">

        @foreach($relatedProduct as $key => $data)
        @if(isset($data->imageProduct) && count($data->imageProduct) > 0)
        <div class="col-12 col-md-6 text-center text-white" style="padding-left:0px;padding-right:0px;">
            <div class="card"
                style="width: 98%;height:6vw;background: 
                                linear-gradient(to bottom, rgb(52 52 52 / 35%) 100%, #F5F5F5 100%),
                                url({{asset('img/product/'.$data->imageProduct[0]->path_image)}});background-size:cover;">
                <div class="card-body">
                    <p class="fontbantitle"
                        style="text-transform: uppercase;font-family: 'Playfair Display', serif;font-size: 1.6vh;line-height:1;font-weight:bold;letter-spacing:10px;">
                        {{$data->title}}</p>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>


@endsection
