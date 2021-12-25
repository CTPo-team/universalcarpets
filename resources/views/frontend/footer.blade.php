<style>
    .ul-contact li{
        margin-top: 0.5em;
    }

    .ul-contact li i{
        margin-right: 0.5em;
        font-size: 12pt;
    }

    .ul-contact a{
        text-decoration: none;
        color:black;
    }
    @media only screen and (max-width: 768px) {
        .ul-contact{
            padding-left: 1.5em;
            padding-right: 1.5em;
        }

    }
</style>

<!-- section footer-->
<div class="section" style="padding-top:50px;padding-bottom:10px;">
    <div class="container" style="padding-right:0px;padding-left:0px">
        <div class="row" style="border-top:2px solid black;font-size:13px">
            <div class="col-8 col-md-6" style="padding-left:0px">
                <div class="row float-left">
                    <div class="col">
                        <ul class="fa-ul ul-contact" style="margin:0px">
                            <a href='tel:{{$settingWeb["phone"]}}'><li><i class="fa fa-phone"></i> {{$settingWeb["phone"]}}</li></a>
                            <a href='tel:{{$settingWeb["fax"]}}'><li><i class="fa fa-fax"></i> {{$settingWeb["fax"]}}</li></a>
                            <a href='mailto:{{$settingWeb["email1"]}}'><li><i class="fa fa-envelope"></i> {{$settingWeb["email1"]}}</li></a>
                            <a href='mailto:{{$settingWeb["email2"]}}'><li><i class="fa fa-envelope"></i> {{$settingWeb["email2"]}}</li></a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-6" style="padding-right:0px">
                <div class="row float-right">
                    <div class="col">
                        <ul class="list-inline ul-contact">
                            <a href='{{$settingWeb["instagram"]}}'><li class="list-inline-item"><i class="fab fa-instagram"></i></li></a>
                            <a href='{{$settingWeb["twitter"]}}'><li class="list-inline-item"><i class="fab fa-twitter"></i></li></a>
                            <a href='{{$settingWeb["facebook"]}}'><li class="list-inline-item"><i class="fab fa-facebook"></i> </li></a>
                            <a href='{{$settingWeb["youtube"]}}'><li class="list-inline-item"><i class="fab fa-youtube"></i> </li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row" style="font-size:13px">
            <div class="col-12 text-center">
            Copyright. Universal Carpets. 2021. All Rights Reserved
            </div>
        </div>
    </div>
</div>
<!-- end footer -->