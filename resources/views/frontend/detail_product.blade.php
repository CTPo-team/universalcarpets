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
    <div class="row align-items-center justify-content-center" style="margin-top:0px;height:65vh;background: 
                                linear-gradient(to bottom, rgb(52 52 52 / 35%) 100%, #F5F5F5 100%),
                                url({{$product->path_image_thumbnail}});background-size:cover;">
        <div class="col-12 col-md-6 text-center text-white">
            <p class="fontbantitle"
                style="text-transform: uppercase;font-family: 'Playfair Display', serif;font-size: 12.6vh;line-height:1;font-weight:bold;letter-spacing:10px;">
                {{$product->title ?? ""}}</p>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-11">
            @if(isset($product->path_image) && count($product->path_image) > 0)

            <p>
                <div id="carouselExampleSlidesOnly" style="float:right;width:25vw;margin: 0px 0px 15px 20px;"
                    class="carousel slide d-none d-sm-block" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($product->path_image as $key => $data)
                        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                            <img class="productpopup" style="width:25vw" data-toggle="modal"
                                data-target="#productpopup" data-id="{{$key}}" src="{{$data}}"
                                alt="First slide">
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev"
                        style="background:black;height:7vh;margin:auto">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next"
                        style="background:black;height:7vh;margin:auto">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div id="carouselExampleSlidesOnly" style="width:100%;"
                    class="carousel slide d-block d-sm-none pb-3" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($product->path_image as $key => $data)
                        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                            <img class="productpopup w-100" data-toggle="modal"
                                data-target="#productpopup" data-id="{{$key}}" src="{{$data}}"
                                alt="First slide">
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev"
                        style="background:black;height:7vh;margin:auto">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next"
                        style="background:black;height:7vh;margin:auto">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                {!! $product->desc !!}
            </p>


            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12 pt-5 cont-card-prod-det" style="padding-left:0px;padding-right:0px;">
            <h4>RELATED PRODUCT</h4>
        </div>
    </div>
    <div class="row" style="margin-top:0px;">

        @foreach($relatedProduct as $key => $data)
        @if(isset($data->path_image) && count($data->path_image) > 0)
        <div class="col-12 col-md-6 text-center text-white cont-card-prod-det" style="padding-left:0px;padding-right:0px;margin-top:10px">
            <div class="card card-prod-det"
                style="width: 98%;height:6.7vw;background: 
                                linear-gradient(to bottom, rgb(52 52 52 / 35%) 100%, #F5F5F5 100%),
                                url({{$data->path_image[0]}});background-size:cover;">
                <div class="card-body">
                    <p class="fontdettitle"
                        style="padding-top:1.5vh;text-transform: uppercase;font-family: 'Playfair Display', serif;font-size: 4vh;line-height:1;font-weight:bold;letter-spacing:10px;">
                        {!! strlen(strip_tags($data->title)) > 15 ? substr(strip_tags($data->title),0,15).'...' : strip_tags($data->title) !!}</p>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>

<!-- modal bootstrap -->
<div class="modal fade" id="productpopup" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $(".modal").on("hidden.bs.modal", function(){
            $(".modal-content").html("");
        });
        $('.productpopup').on('click', function () {
            var id = $(this).attr("data-id");
            // console.log(id);
            var flagsUrl = '{{ asset('/img/product') }}';
            $(".modal-content").append("<img class='img-fluid' style='width:100%' src='"+flagsUrl+'/'+id+"' >");             
        });
    })

</script>
@endsection
