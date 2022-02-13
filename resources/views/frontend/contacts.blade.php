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
        <div class="col-12 col-md-3 text-right">
            <p style="padding-top: 2.3vw;
    padding-right: 1.5vw;font-family: 'Playfair Display', serif;line-height:1;color:#D5AD6A;font-size:4.4vw;">Our Office</p>
        </div>
        <div class="col-12 col-md-9">
            <div class="row">
                @foreach($contacts as $key => $data)

                <div class="col-12 col-md-6 pr-4 pl-4 mt-5" style="border-left:4px solid #C72933">
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
        <div class="col-12 col-md-3 text-right">
            <p style="padding-top: 2.3vw;
    padding-right: 1.5vw;font-family: 'Playfair Display', serif;line-height:1;color:#D5AD6A;font-size:4.4vw;">Map</p>
        </div>
        <div class="col-12 col-md-9" style="border-left: 4px solid #C72933">
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
<!-- section contact us-->
<div class="sectionContact" style="padding-top:50px;padding-bottom:50px;background:url({{asset('images/linecontactus.png')}}); background-repeat: no-repeat;
background-size: cover;">
    <div class="container" style="padding-right:0px;padding-left:0px">
        <div class="row mt-4" style="margin-right:0px;margin-left:0px">
            <div class="col-md-12 ">
                <div class="card card-bgcontactus">
                    <div class="card-body">
                        <div class="row rowmobilecontact p-5">
                            <div class="col-12 col-md-6 align-self-center">
                                <div class="row justify-content-center">
                                    <div class="col tulisancontact" style="max-width:53%;">
                                        <p
                                            style="font-family: 'Playfair Display', serif;font-size: 40px !important;font-weight:bold;color:#C72C36">
                                            CONTACT US</p>
                                        <p>
                                            Submit your question and be the first to be notified to our latest
                                            collections
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-md-6">
                                @include('flash::message')
                                {!! Form::open(['url' => 'sendcontactus']) !!}
                                <div class="form-group row border-bottom" style="width:100%">
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="inputcontactus form-control"
                                            placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group row border-bottom" style="width:100%">
                                    <div class="col-sm-8">
                                        <input type="text" name="email" class="inputcontactus form-control"
                                            placeholder="Email Adress" required>
                                    </div>
                                </div>
                                <div class="form-group row border-bottom" style="width:100%">
                                    <div class="col-sm-9">
                                        <input type="number" name="phone" class="inputcontactus form-control"
                                            placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="form-group row border-bottom" style="width:100%">
                                    <div class="col-sm-9">
                                        <input type="text" name="message" class="inputcontactus form-control"
                                            placeholder="Message" required>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 text-right pt-3">
                                        <button type="submit" class="btn pl-5 pr-5 pt-2 pb-2"
                                            style="background:#D5AD6A;color:white;">
                                            SUBMIT
                                        </button>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end contact us -->  

    </div>
</div>



@endsection
