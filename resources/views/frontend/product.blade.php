@extends('frontend.app')

@section('css')
<style>
    .navbar-light .navbar-nav .nav-link {
        color: #C62630 !important;
    }
</style>
@endsection
@section('content')
<style>
    @media only screen and (min-width: 1800px) {
        .cont-productpage{
            max-width:1445px !important;
        }
    }
</style>
<div class="container cont-productpage">
    <div class="row" style="margin-top:0px;height:600px;background:
                                url({{asset('images/bannerproduct.png')}});background-size:cover;">
        <div class="col-12" style="">
            <div class="carousel-caption text-left">
                <div class="row pt-5">
                    <div class="col-md-8 pt-5">
                        <p class="fontbantitle"
                            style="font-family: 'Playfair Display', serif;font-size: 12.6vh;line-height:1;font-weight:bold;letter-spacing:10px;">
                            Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container cont-productpage">
    <div class="row pb-5">
        <div class="col-12 pt-5">
            <h4>FEATURED PRODUCT</h4>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-7" style="padding-right:0px;padding-left:0px">
                    <img class="img-fluid" src="{{asset('images/featprod.png')}}" style="height:100%">
                </div>
                <div class="col-5" style="background:#C72C36;padding-right:0px;padding-left:0px">
                    <div class="row align-items-center" style="height:100%">
                        <div class="col-12 p-5">
                            <div class="judul-featured">
                                <p style="font-size:10.4vh;font-family: 'Playfair Display', serif;color:white;">Paris
                                    Prima</p>
                            </div>
                            <div class="text-featured" style="width:48vh">
                                <p style="font-size:2.2vh;color:white;">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Sed fringilla pretium ullamcorper. Cras sed hendrerit tellus,
                                    tempor auctor nulla. </p>
                            </div>
                            <div class="button text-right pt-3">
                                <button type="button" class="btn pl-5 pr-5 pt-2 pb-2"
                                    style="background:#D5AD6A;color:white;">asdasdasd</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5">
        <div class="col-12  pt-5">
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
                        <label for="exampleFormControlSelect1">Sub Categories</label>
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
                <div class="col-md-1 align-self-center pt-3">
                    <button type="button" onclick="submitFilter()" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row data-product">
            </div>
        </div>
    </div>

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
            category = [{
                "id": "",
                "title": ""
            }];
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
        }

        function setDefaultSubCategory() {
            subCategory = [{
                "id": "",
                "title": ""
            }];
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
            brand = [{
                "id": "",
                "title": ""
            }];
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
                
                product.forEach(function (data) {
                    console.log(data);
                    $(classProduct).append("<div class='col-4 content' style='padding-left:0px;padding-right:0px'><div class='content-overlay'></div><img class='img-fluid' width='100%' src='http://127.0.0.1:8000/img/product/"+data.image_product_one.path_image+"'>\
                    <div class='content-details fadeIn-bottom'>\
                                <p class='content-text'>"+data.title+"</p>\
                                <br>\
                                <a class='link-content-text' href=''>View Product</a>\
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
        //Set Data Category
        getCategory();
        addOptionSelect(classCategories, category);

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

        //Scroll Load More
        $(window).scroll(function () {
            if ($(window).scrollTop() == $(document).height() - $(window).height()) {
                if (!noDataProduct) {
                    page = page + 1
                    loadProduct()
                }
            }
        });
    </script>
    @endsection
