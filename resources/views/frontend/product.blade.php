@extends('frontend.app')

@section('css')
<style>
    .navbar-light .navbar-nav .nav-link {
        color: #C62630 !important;
    }

    .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link
    {
        border-bottom: 3px solid #C72933;
    }

    .owl-nav{
        margin-top:-35px !important;
        margin-bottom: -20px !important;
    } 

    .owl-dots{
        display:none !important;
    }

    .owl-next , .owl-prev{
        font-size: 4vw !important;
    }

    .owl-theme .owl-nav [class*=owl-]:hover {
        background: transparent !important;
        color: #666666;
    }

    @media only screen and (min-width: 1800px) {
        .cont-productpage{
            max-width:1445px !important;
        }
    }
</style>
@endsection
@section('content')
<div class="sectionBanner" style="margin-top:-72px">
<div class="owl-carousel owl-theme">
 
        <div class="item" style="margin-top:0px;height:90vh;background: 
                                linear-gradient(to bottom, transparent 60%, #F5F5F5 95%),
                                url({{asset('img/banner/1_1639900016.jpg')}});background-size:cover;width:100vw !important">
                              
        </div>
        <div class="item" style="margin-top:0px;height:90vh;background: 
                                linear-gradient(to bottom, transparent 60%, #F5F5F5 95%),
                                url({{asset('images/bannerproduct.png')}});background-size:cover;width:100vw !important">
                              
        </div>
</div>
</div>

<!-- <div class="container cont-productpage pt-4">

    <div class="row mobilebanprod" style="margin-top:0px;height:65vh;background:
                                url({{asset('images/bannerproduct.png')}});background-size:cover;">
        <div class="col-12" style="">
            <div class="carousel-caption text-left">
                <div class="row pt-5">
                    <div class="col-md-8 pt-3">
                        <p class="fontbantitle"
                            style="font-family: 'Playfair Display', serif;font-size: 6vw;line-height:1;font-weight:bold;letter-spacing:10px;">
                            Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container cont-productpage mt-5">
    <div class="row d-none d-sm-block pb-5">
        <div class="col-12 pt-5" style="padding-left:0px;padding-right:0px;">
            <h4>FEATURED PRODUCT</h4>
        </div>
        <div class="col-12">
            <div class="row">
            @if(isset($productFeatured))
                <div class="col-7" style="padding-right:0px;padding-left:0px;background:url({{asset('img/product/'. $productFeatured->imageProductOne )}});background-size:cover;height:24vw !important">
                </div>
                <div class="col-5" style="background:#C72C36;padding-right:0px;padding-left:0px">
                    <div class="row align-items-center" style="height:40vh">
                        <div class="col-12 p-5">
                            <div class="judul-featured">
                                <p style="font-size:8vh;font-family: 'Playfair Display', serif;color:white;">{!!$productFeatured->title!!}</p>
                            </div>
                            <div class="text-featured" style="width:48vh">
                                <p style="font-size:2.2vh;color:white;"> {!! strlen(strip_tags($productFeatured->desc)) > 180 ? substr(strip_tags($productFeatured->desc),0,180).'...' : strip_tags($productFeatured->desc) !!}</p>
                            </div>
                            <div class="button text-right pt-3">
                                <a href="{{ url('detail-product/'.$productFeatured->slug) }}">
                                    <button type="button" class="btn pl-5 pr-5 pt-2 pb-2"
                                        style="background:#D5AD6A;color:white;">VISIT</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            </div>
        </div>
    </div>
    

    <!-- mobile feat product section -->
    <div class="row d-block d-sm-none pb-5">
        <div class="col-12 " >
            <h4>FEATURED PRODUCT</h4>
        </div>
        <div class="col-12">
            <div class="row">
            @if(isset($productFeatured))
                <div class="col-12" style="padding-right:0px;padding-left:0px;background:url({{asset('img/product/'. $productFeatured->imageProductOne )}});background-size:cover;height:44vw !important;background-position:center;">
                </div>
                <div class="col-12" style="background:#C72C36;padding-right:0px;padding-left:0px;padding-bottom:10px">
                    <div class="row">
                        <div class="col-12 pl-4 pr-4">
                            <div class="judul-featured">
                                <p style="font-size:4vh;font-family: 'Playfair Display', serif;color:white;">{!!$productFeatured->title!!}</p>
                            </div>
                            <div class="text-featured">
                                <p style="font-size:1.5vh;color:white;"> {!! strlen(strip_tags($productFeatured->desc)) > 180 ? substr(strip_tags($productFeatured->desc),0,180).'...' : strip_tags($productFeatured->desc) !!}</p>
                            </div>
                            <div class="button text-right">
                                <a href="{{ url('detail-product/'.$productFeatured->slug) }}">
                                    <button type="button" class="btn pl-5 pr-5 pt-2 pb-2"
                                        style="background:#D5AD6A;color:white;">VISIT</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            </div>
        </div>
    </div>
    <div class="row d-block d-sm-none pt-2 pb-5">
        <div class="col-12">
            <h4>ALL PRODUCTS</h4>
        </div>
        <div class="col-12 pb-5">
            <div class="row">
                <div class="col-4 col-md-2">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" style="font-size:14px">Categories</label>
                        <select class="form-control select-categories" name="filterCategories"
                            id="exampleFormControlSelect1" onchange="setSubCategory()" style="font-size:14px">
                        </select>
                    </div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" style="font-size:14px">Sub-categories</label>
                        <select class="form-control select-subcategories" name="filterSubCategories"
                            id="exampleFormControlSelect1" onchange="setBrand()" style="font-size:14px">
                        </select>
                    </div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" style="font-size:14px">Brands</label>
                        <select class="form-control select-brands" name="filterBrand" id="exampleFormControlSelect1" style="font-size:14px">
                        </select>
                    </div>
                </div>
                <div class="col-12 align-self-center pt-1">
                    <button type="button" onclick="submitFilter()" class="btn btn-primary" style="background:#C72933;border:none;width:100%"><i class="fa fa-search"></i> Search</button>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row data-product">
            </div>
        </div>
        <div class="col-12">
            <center>
                <button type="button" class="btn mt-5 pl-5 pr-5 pt-2 pb-2 load-more" style="background:#D5AD6A;color:white;">LOAD MORE</button>
            </center>
        </div>
    </div>
</div>


<div class="row d-none d-sm-block pb-5">
        <div class="col-12  pt-5 ml-4 mr-4">
            <h4>ALL PRODUCTS</h4>
        </div>
        <div class="col-12 pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Categories</label>
                        <select class="form-control select-categories" name="filterCategories"
                            id="exampleFormControlSelect1" onchange="setSubCategory()">
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Sub-categories</label>
                        <select class="form-control select-subcategories" name="filterSubCategories"
                            id="exampleFormControlSelect1" onchange="setBrand()">
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Brands</label>
                        <select class="form-control select-brands" name="filterBrand" id="exampleFormControlSelect1">
                        </select>
                    </div>
                </div>
                <div class="col-md-2 align-self-center pt-3">
                    <button type="button" onclick="submitFilter()" class="btn btn-primary" style="background:#C72933;border:none"><i class="fa fa-search"></i> Search</button>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row data-product">
            </div>
        </div>
        <div class="col-12">
            <center>
                <button type="button" class="btn mt-5 pl-5 pr-5 pt-2 pb-2 load-more" style="background:#D5AD6A;color:white;">LOAD MORE</button>
            </center>
        </div>
    </div>


    <!-- end section -->

    
    @endsection

    @section('scripts')
    <script>
        var productCategory = {!! json_encode($productCategory -> toArray()) !!};

        //Init Value Filter
        var filterCategories = {!! isset($filter["filterCategories"]) ? $filter["filterCategories"] : "\"\"" !!}
        var filterSubCategories = {!! isset($filter["filterSubCategories"]) ? $filter["filterSubCategories"] : "\"\"" !!}
        var filterBrand = {!! isset($filter["filterBrand"]) ? $filter["filterBrand"] : "\"\"" !!}
        var page = 1
        var noDataProduct = false

        //Class Select
        var classCategories = ".select-categories"
        var classSubcategories = ".select-subcategories"
        var classBrand = ".select-brands"
        var classProduct = ".data-product"

        //Init Array
        var category = [];
        var subCategory = [];
        var brand = [];
        var tempBrandTitle = [];

        //Base
        function addOptionSelect(classSelect, dataOption) {
            clearOption(classSelect)
            $(classSelect).append($('<option>', {
                    value: "",
                    text: "All"
            }));
            dataOption.forEach(function (data) {
                $(classSelect).append($('<option>', {
                    value: data.id,
                    text: data.title
                }));
            })
        }

        function clearOption(classClear) {
            $(classClear).prop("selected", false)
            $(classClear).empty()
        }

        //Category
        function getCategory() {
            productCategory.forEach(function (data) {
                category.push({
                    "id": data.id,
                    "title": data.title
                });
            });
        }

        function setDefaultCategory() {
            category = [];
        }

        //SubCategory
        function getSubCategory(idCategory) {
            setDefaultSubCategory();
            productCategory.forEach(function (data) {
                if (data.id == idCategory) {
                    if (data.sub_category.length > 0) {
                        data.sub_category.forEach(function (dataSub) {
                            subCategory.push({
                                "id": dataSub.id,
                                "title": dataSub.title
                            });
                        });
                    }

                    //If Just Have Product (Brand)
                    if (data.product.length > 0) {
                        setBrandWithoutSubCategory(data.product)
                    }
                    return;
                }
            });
        }

        function setSubCategory() {
            clearOption(classSubcategories)
            clearOption(classBrand)

            valCategory = $(classCategories).find(":selected").val()
            getSubCategory(valCategory)
            addOptionSelect(classSubcategories, subCategory)
            addOptionSelect(classBrand, brand)
        }

        function setDefaultSubCategory() {
            subCategory = [];
        }

        //Brand
        function setBrandWithoutSubCategory(product) {
            setDefaultBrand();
            product.forEach(function (data) {
                if (!tempBrandTitle.includes(data.product_brand.title)) {
                    brand.push({
                        "id": data.product_brand.id,
                        "title": data.product_brand.title
                    });
                    tempBrandTitle.push(data.product_brand.title)
                }
            });
            setDefaultTempBrandTitle();
            sortBrand()
            addOptionSelect(classBrand, brand)
        }

        function getBrand(idSubCategory, idCategory) {
            setDefaultBrand();
            productCategory.forEach(function (data) {
                if (data.id == idCategory) {
                    if (data.sub_category.length > 0) {
                        data.sub_category.forEach(function (dataSub) {
                            if (dataSub.id == idSubCategory) {
                                if (dataSub.product.length > 0) {
                                    dataSub.product.forEach(function (dataProduct) {
                                        if (!tempBrandTitle.includes(dataProduct.product_brand
                                                .title)) {
                                            brand.push({
                                                "id": dataProduct.product_brand.id,
                                                "title": dataProduct.product_brand.title
                                            });
                                            tempBrandTitle.push(dataProduct.product_brand.title)
                                        }
                                    });
                                }
                            }
                        });
                    }
                    setDefaultTempBrandTitle()
                    sortBrand()
                    return;
                }
            });
        }

        function setBrand() {
            clearOption(classBrand)
            valCategory = $(classCategories).find(":selected").val()
            valSubCategory = $(classSubcategories).find(":selected").val()
            getBrand(valSubCategory, valCategory)
            addOptionSelect(classBrand, brand)
        }

        function setDefaultBrand() {
            brand = [];
        }

        function setDefaultTempBrandTitle() {
            tempBrandTitle = [];
        }

        function sortBrand() {
            brand.sort((a, b) => (a.title > b.title) ? 1 : -1)
        }

        //Product
        function loadProduct() {
            $.ajax({
                url: "{!! url('data-product') !!}",
                type: "GET",
                data: {
                    page: page,
                    filterBrand: filterBrand,
                    filterCategories: filterCategories,
                    filterSubCategories: filterSubCategories
                },
                success: function (response) {
                    if(response.hasOwnProperty("current_page") && response.hasOwnProperty("last_page")){
                        if(response.current_page == response.last_page){
                            $(".load-more").hide()
                        } 
                    }else{
                        $(".load-more").hide()
                    }             
                    appendProduct(response.data)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }

        function appendProduct(product) {
            if (product.length > 0) {
                noDataProduct = false
                var flagsUrl = '{{ asset('/img/product') }}';
                var baseUrl = '{{ url('detail-product') }}';
                product.forEach(function (data) {
                    $(classProduct).append("<div class='col-6 col-md-4 content p-2' style=''><div class='content-overlay' style='height:96%;width:96%;top:9px;left:8px;'></div><img class='img-fluid' width='100%' src='"+ flagsUrl +'/'+ data.image_product_one + "'>\
                    <div class='content-details fadeIn-bottom'>\
                                <p class='content-text fonttittle-overlay' style='font-size:3vw'>"+data.title+"</p>\
                                <a class='link-content-text fontlink-overlay' style='font-size:1.5vw' href='"+baseUrl+"/"+data.slug+"'>View Product</a>\
                                </div>\
                    </div>")
                });
            } else {
                noDataProduct = true
            }
        }

        function clearProduct() {
            $(classProduct).empty();
        }


        //Filter
        function submitFilter() {
            noDataProduct = false;
            page = 1;
            filterCategories = $(classCategories).val();
            filterSubCategories = $(classSubcategories).val();
            filterBrand = $(classBrand).val();

            const urlParams = new URL(document.URL);
            urlParams.searchParams.delete('filterCategories');
            urlParams.searchParams.delete('filterSubCategories');
            urlParams.searchParams.delete('filterBrand');
            urlParams.searchParams.append('filterCategories', filterCategories);
            urlParams.searchParams.append('filterSubCategories', filterSubCategories);
            urlParams.searchParams.append('filterBrand', filterBrand);

            history.pushState({}, null, urlParams);
            clearProduct()
            loadProduct()
        }

        //Default
        setDefaultCategory();
        setDefaultSubCategory();
        setDefaultBrand();

        //Set Data Category
        getCategory();
        addOptionSelect(classCategories, category);
        addOptionSelect(classSubcategories, subCategory)
        addOptionSelect(classBrand, brand)

        //Set Select From Data Filter
        if (filterCategories != "") {
            getSubCategory(filterCategories)
            addOptionSelect(classSubcategories, subCategory)
            $(classCategories).val(filterCategories).change();
        }

        if (filterCategories != "" && filterSubCategories != "") {
            getBrand(filterSubCategories, filterCategories)
            addOptionSelect(classBrand, brand)
            $(classSubcategories).val(filterSubCategories).change();
        }

        if (filterBrand != "") {
            $(classBrand).val(filterBrand).change();
        }

        loadProduct()

        $(".load-more").click(function () {
            if (!noDataProduct) {
                page = page + 1
                loadProduct()
            }
        });

      
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                margin:10,
                loop:true,
                autoWidth:true,
                items:1,
                nav:true,
            })
        });
    </script>
    @endsection
