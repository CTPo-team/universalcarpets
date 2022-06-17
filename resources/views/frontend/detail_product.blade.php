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
    <div class="row align-items-center justify-content-center banner-detail-product" style="margin-top:0px;background:url({{$product->path_image_thumbnail}});background-size:100% 100%;">
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
                                data-target="#productpopup" data-id="{{$data}}" src="{{$data}}"
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
                                data-target="#productpopup" data-id="{{$data}}" src="{{$data}}"
                                alt="First slide">
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev d-none d-sm-block" href="#carouselExampleSlidesOnly" role="button" data-slide="prev"
                        style="background:black;height:7vh;margin:auto">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next d-none d-sm-block" href="#carouselExampleSlidesOnly" role="button" data-slide="next"
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
            var flagsUrl = '{{ asset('/img/gallery') }}';
            $(".modal-content").append("<img class='img-fluid' style='width:100%' src='"+id+"' >");             
        });
    })

</script>
@endsection
