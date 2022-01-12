@extends('frontend.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Categories</label>
                <select class="form-control select-categories" name="filterCategories" id="exampleFormControlSelect1"
                    onchange="setSubCategory()">
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Sub Categories</label>
                <select class="form-control select-subcategories" name="filterSubCategories"
                    id="exampleFormControlSelect1" onchange="setBrand()">
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Brands</label>
                <select class="form-control select-brands" name="filterBrand" id="exampleFormControlSelect1">
                </select>
            </div>
        </div>
        <div class="col-md-3 align-self-center pt-3">
                <button type="button" onclick="submitFilter()" class="btn btn-primary">Submit</button>
        </div>
    </div>
    
    <h1>Product</h1>
    <div class="row data-product">
    </div>
</div>

@endsection

@section('scripts')
<script>
    var productCategory = {!! json_encode($productCategory->toArray()) !!};

    //Init Value Filter
    var filterCategories = {!! isset($filter["filterCategories"]) ? $filter["filterCategories"] : "\"\""  !!}
    var filterSubCategories = {!! isset($filter["filterSubCategories"]) ? $filter["filterSubCategories"] : "\"\""  !!}
    var filterBrand = {!! isset($filter["filterBrand"]) ? $filter["filterBrand"] : "\"\""  !!}
    var page = 1
    var noDataProduct = false

    //Class Select
    var classCategories = ".select-categories"
    var classSubcategories = ".select-subcategories"
    var classBrand = ".select-brands"
    var classProduct = ".data-product"

    //Init Array
    var category=[];
    var subCategory=[];
    var brand=[];
    var tempBrandTitle = [];

    //Base
    function addOptionSelect(classSelect,dataOption){
      clearOption(classSelect)
      dataOption.forEach(function(data) {
        $(classSelect).append($('<option>', {
            value: data.id,
            text: data.title
        }));
      })
    }

    function clearOption(classClear){
      $(classClear).prop("selected", false)
      $(classClear).empty()
    }

    //Category
    function getCategory(){
        productCategory.forEach(function(data) {
          category.push({"id" : data.id, "title" : data.title});
        });
    }

    function setDefaultCategory(){
      category=[{"id" : "", "title" : ""}];
    }

    //SubCategory
    function getSubCategory(idCategory){
        setDefaultSubCategory();
        productCategory.forEach(function(data) {
          if(data.id == idCategory){
            if(data.sub_category.length > 0){
              data.sub_category.forEach(function(dataSub) {
                subCategory.push({"id" : dataSub.id, "title" : dataSub.title});
              });
            }

            //If Just Have Product (Brand)
            if(data.product.length > 0){
              setBrandWithoutSubCategory(data.product)
            }
            return;
          }
        });
    }

    function setSubCategory(){
      clearOption(classSubcategories)
      clearOption(classBrand)

      valCategory =  $(classCategories).find(":selected").val()
      getSubCategory(valCategory)
      addOptionSelect(classSubcategories,subCategory)
    }

    function setDefaultSubCategory(){
      subCategory=[{"id" : "", "title" : ""}];
    }

    //Brand
    function setBrandWithoutSubCategory(product){
        setDefaultBrand();
        product.forEach(function(data) {
          if(!tempBrandTitle.includes(data.product_brand.title)){
            brand.push({"id" : data.product_brand.id, "title" : data.product_brand.title});
            tempBrandTitle.push(data.product_brand.title)
          }
        });
        setDefaultTempBrandTitle();
        sortBrand()
        addOptionSelect(classBrand,brand)
    }

    function getBrand(idSubCategory,idCategory){
        setDefaultBrand();
        productCategory.forEach(function(data) {
          if(data.id == idCategory){
            if(data.sub_category.length > 0){
              data.sub_category.forEach(function(dataSub) {
                if(dataSub.id == idSubCategory){
                  if(dataSub.product.length > 0){
                    dataSub.product.forEach(function(dataProduct) {
                      if(!tempBrandTitle.includes(dataProduct.product_brand.title)){
                        brand.push({"id" : dataProduct.product_brand.id, "title" : dataProduct.product_brand.title});
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

    function setBrand(){
      clearOption(classBrand)
      valCategory =  $(classCategories).find(":selected").val()
      valSubCategory =  $(classSubcategories).find(":selected").val()
      getBrand(valSubCategory,valCategory)
      addOptionSelect(classBrand,brand)
    }

    function setDefaultBrand(){
      brand=[{"id" : "", "title" : ""}];
    }

    function setDefaultTempBrandTitle(){
      tempBrandTitle=[];
    }

    function sortBrand(){
      brand.sort((a, b) => (a.title > b.title) ? 1 : -1)
    }

    //Product
    function loadProduct(){
      $.ajax({
        url: "{!! url('data-product') !!}",
        type: "GET",
        data: { 
          page:page,
          filterBrand:filterBrand,
          filterCategories:filterCategories,
          filterSubCategories:filterSubCategories
        },
        success: function(response) {
          appendProduct(response.data)
        },
        error: function(xhr) {
          //Do Something to handle error
        }
      });
    }

    function appendProduct(product){
      if(product.length > 0){
        noDataProduct = false
        product.forEach(function(data) {
          $(classProduct).append("<div class='col-4'>"+data.title+"</div>")
        });
      }else{
        noDataProduct = true
      } 
    }

    function clearProduct(){
      $(classProduct).empty();
    }
    

    //Filter
    function submitFilter(){
      filterCategories=$(classCategories).val();
      filterSubCategories=$(classSubcategories).val();
      filterBrand=$(classBrand).val();

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

  </script>

  <script>
    //Default
    setDefaultCategory();
    //Set Data Category
    getCategory();
    addOptionSelect(classCategories,category);

    //Set Select From Data Filter
    if(filterCategories != ""){
      getSubCategory(filterCategories)
      addOptionSelect(classSubcategories,subCategory)
      $(classCategories).val(filterCategories).change();
    }

    if(filterCategories != "" && filterSubCategories != ""){
      getBrand(filterSubCategories,filterCategories)
      addOptionSelect(classBrand,brand)
      $(classSubcategories).val(filterSubCategories).change();
    }

    if(filterBrand != ""){
      $(classBrand).val(filterBrand).change();
    }

    loadProduct()

    //Scroll Load More
    $(window).scroll(function() {
        if($(window).scrollTop() == $(document).height() - $(window).height()) {
          if(!noDataProduct){
            page = page + 1
            loadProduct()
          }
        }
    });
  </script>
@endsection
