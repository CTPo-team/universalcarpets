<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon"/>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 4.1.1 -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="//fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/iziToast.min.css') }}">
    <link href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/summernote.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/datatable/datatable.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/datatable/datatable.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/datatable/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/krajee-fileinput/fileinput.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/krajee-fileinput/fileinput-rtl.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/chocolat.css') }}" rel="stylesheet" type="text/css"/>

@yield('page_css')
<!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/components.css')}}">
    @yield('page_css')


    @yield('css')
</head>
<body>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            @include('layouts.header')

        </nav>
        <div class="main-sidebar main-sidebar-postion">
            @include('layouts.sidebar')
        </div>
        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        <footer class="main-footer">
            @include('layouts.footer')
        </footer>
    </div>
</div>

@include('profile.change_password')
@include('profile.edit_profile')

</body>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('js/summernote.js') }}"></script>
<script src="{{ asset('js/datatable/datatable.js') }}"></script>
<script src="{{ asset('js/datatable/datatable.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/datatable/datatable.select.min.js') }}"></script>
<script src="{{ asset('js/krajee-fileinput/plugins/piexif.min.js') }}"></script>
<script src="{{ asset('js/krajee-fileinput/plugins/sortable.min.js') }}"></script>
<script src="{{ asset('js/krajee-fileinput/fileinput.min.js') }}"></script>
<script src="{{ asset('js/krajee-fileinput/themes/fas/theme.min.js') }}"></script>
<script src="{{ asset('js/krajee-fileinput/locales/LANG.js') }}"></script>
<script src="{{ asset('js/tooltip.js') }}"></script>
<script src="{{ asset('js/chocolat.min.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('web/js/stisla.js') }}"></script>
<script src="{{ asset('web/js/scripts.js') }}"></script>
<!-- <script src="{{ mix('assets/js/profile.js') }}"></script>
<script src="{{ mix('assets/js/custom/custom.js') }}"></script> -->
@yield('page_js')
@yield('scripts')
<script>
    $('div.alert').not('.alert-important').delay(5000).fadeOut(350);
</script>
<script>
    let loggedInUser =@json(\Illuminate\Support\Facades\Auth::user());
    let loginUrl = '{{ route('login') }}';
    // Loading button plugin (removed from BS4)
    (function ($) {
        $.fn.button = function (action) {
            if (action === 'loading' && this.data('loading-text')) {
                this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
            }
            if (action === 'reset' && this.data('original-text')) {
                this.html(this.data('original-text')).prop('disabled', false);
            }
        };
    }(jQuery));
</script>
<script>
    fileConfig = {
        theme: "fas",
        ajaxSettings:{
            'headers': {"X-CSRF-TOKEN": "{{ csrf_token() }}"},
        },
        maxFileSize: 2000,
        maxFileCount: 10,
        minFileCount: 0,
        allowedFileExtensions: ["jpg", "jpeg", "png", "gif"],
        uploadUrl: <?php echo json_encode(url("/add-gallery")); ?>,
        uploadAsync: true,
        deleteUrl: <?php echo json_encode(url("/delete-gallery")); ?>,
        showUpload: false, 
        showRemove: false,
        validateInitialCount: true,
        overwriteInitial: false,
        browseOnZoneClick: true,
        initialPreviewAsData: true,
        ajaxDeleteSettings: {
            'headers': {"X-CSRF-TOKEN": "{{ csrf_token() }}"},
        },
        initialPreview:[],
        initialPreviewConfig:[],
        uploadExtraData: []
    }


    function setMultipleFile(input,value,preview){
        fileConfigMultiple = fileConfig
        fileConfigMultiple.uploadExtraData={
            fieldName:input
        }
        if(preview.hasOwnProperty('initialPreview') && preview.hasOwnProperty('initialPreviewConfig')){
            fileConfigMultiple.initialPreview = preview.initialPreview
            fileConfigMultiple.initialPreviewConfig = preview.initialPreviewConfig
        }
        fileConfigMultiple.maxFileCount = 10
        $(input).fileinput(fileConfigMultiple).on('filebatchuploadcomplete', function() {
            setValue(value,$(input).fileinput('getPreview'))
        }).on("filebatchselected", function(event, files) {
            $(input).fileinput("upload");
        }).on('filedeleted', function() {
            setValue(value,$(input).fileinput('getPreview'))
        }).on('filesorted', function() {
            setValue(value,$(input).fileinput('getPreview'))
        });
        setValue(value,$(input).fileinput('getPreview'))
    }

    function setSingleFile(input,value,preview){
        fileConfigSingle = fileConfig
        fileConfigSingle.uploadExtraData={
            fieldName:input
        }
        if(preview.hasOwnProperty('initialPreview') && preview.hasOwnProperty('initialPreviewConfig')){
            fileConfigSingle.initialPreview = preview.initialPreview
            fileConfigSingle.initialPreviewConfig = preview.initialPreviewConfig
        }
        fileConfigSingle.maxFileCount = 1
        $(input).fileinput(fileConfigSingle).on('filebatchuploadcomplete', function() {
            setValue(value,$(input).fileinput('getPreview'))
        }).on("filebatchselected", function(event, files) {
            $(input).fileinput("upload");
        }).on('filedeleted', function() {
            setValue(value,$(input).fileinput('getPreview'))
        }).on('filesorted', function() {
            setValue(value,$(input).fileinput('getPreview'))
        });
        setValue(value,$(input).fileinput('getPreview'))
    }

    function setMultipleFileWithMax(input,value,preview,max){
        fileConfigMultipleMax = fileConfig
        fileConfigMultipleMax.uploadExtraData={
            fieldName:input
        }
        if(preview.hasOwnProperty('initialPreview') && preview.hasOwnProperty('initialPreviewConfig')){
            fileConfigMultipleMax.initialPreview = preview.initialPreview
            fileConfigMultipleMax.initialPreviewConfig = preview.initialPreviewConfig
        }
        fileConfigMultipleMax.maxFileCount = max
        $(input).fileinput(fileConfigMultipleMax).on('filebatchuploadcomplete', function() {
            setValue(value,$(input).fileinput('getPreview'))
        }).on("filebatchselected", function(event, files) {
            $(input).fileinput("upload");
        }).on('filedeleted', function() {
            setValue(value,$(input).fileinput('getPreview'))
        }).on('filesorted', function() {
            setValue(value,$(input).fileinput('getPreview'))
        });
        setValue(value,$(input).fileinput('getPreview'))
    }

    function setValue(input,value){
        let result = value.config.map(a => a.caption)
        $(input).val(result.toString())
    }
    
</script>
@yield('scriptsfileinput')
</html>
