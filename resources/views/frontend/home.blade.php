@extends('frontend.app')

@section('content')
<!-- style home -->
<style>
    .carousel-caption {
        right: auto !important;
        bottom: auto !important;
        top: 17%;
        left: 7%;
    }

    .carousel-indicators {
        right: auto !important;
        margin-left: 7%;
    }

    /* .overlay {
        position: absolute;
        background-color: black;
        height: 100%;
        width: 100%;
        opacity: 0.1;
    } */

</style>
<!-- end style home -->

<!-- section banner -->
<div class="sectionBanner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-caption d-none d-md-block text-left">
            <div class="row">
                <div class="col-md-6">
                    <p
                        style="font-family: 'Playfair Display', serif;font-size: 26 !important;line-height:1;font-weight:bold;letter-spacing:10px;letter-spacing:5px;color:#D5AD6A">
                        FEATURED COLLECTION</p>
                    <p
                        style="font-family: 'Playfair Display', serif;font-size: 129px !important;line-height:1;font-weight:bold;letter-spacing:10px;">
                        PARIS PRIMA</p>
                </div>
            </div>
            <br>
            <p><button class="btn btn-danger pl-5 pr-5 pt-2 pb-2" type="button">VIEW PRODUCT</button></p>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block w-100"
                    style="height:680px;background: 
   linear-gradient(to bottom, transparent 50%, white 95%),
   url(https://images.wallpaperscraft.com/image/single/interior_design_style_design_home_villa_living_room_68248_1366x768.jpg);">
                  <!-- <div class="overlay">
                    </div> -->
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block w-100" style="height:680px;background: 
   linear-gradient(to bottom, transparent 50%, white 95%),
   url(https://cdn.wallpapersafari.com/36/31/Ekrjip.jpg);">
                    <!-- <div class="overlay">
                    </div> -->
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block w-100" style="height:680px;background: 
   linear-gradient(to bottom, transparent 50%, white 95%),
   url(https://s1.1zoom.me/b5050/326/Interior_Design_Living_room_Sofa_Armchair_542663_1366x768.jpg);">
                    <!-- <div class="overlay">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section banner -->

<!-- section about -->
<div class="sectionAbout p-5" style="margin-top:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
               <div class="card-body">
                   <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <p style="font-size:44px;font-family: 'Playfair Display', serif;font-size:bold;">
                            OUR STORY
                        </p>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac massa sit amet nulla semper volutpat cursus nec dolor. Nunc mollis tincidunt justo, viverra vehicula est laoreet vel. Donec ac pellentesque eros. In sit amet nisi leo. Mauris sit amet mauris a ligula sodales efficitur at ut tortor. Maecenas eu purus cursus, laoreet ante sed, ornare metus. Etiam sit amet maximus ante. 
                        </p>
                    </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>
<!-- end section about -->
@endsection
