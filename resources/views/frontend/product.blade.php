@extends('frontend.app')

@section('content')
  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="exampleFormControlSelect1">Categories</label>
        <select class="form-control select-categories" id="exampleFormControlSelect1" onchange="setSubCategory()">
        </select>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label for="exampleFormControlSelect1">Sub Categories</label>
        <select class="form-control select-subcategories" id="exampleFormControlSelect1" onchange="setBrand()">
        </select>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label for="exampleFormControlSelect1">Brands</label>
        <select class="form-control select-brands" id="exampleFormControlSelect1">
        </select>
      </div>
    </div>
    <div class="col-md-3">
      <button type="button" class="btn btn-primary">Submit</button>
    </div>
  </div>
@endsection   

@section('scripts')
  <script>
    var productCategory = {!! json_encode($productCategory->toArray()) !!};
    
    //Class Select
    var classCategories = ".select-categories"
    var classSubcategories = ".select-subcategories"
    var classBrand = ".select-brands"

    //Init Array
    var category=[];
    var subCategory=[];
    var brand=[];

    //Base
    function addOptionSelect(classSelect,dataOption){
      $(classSelect).empty()
      dataOption.forEach(function(data) {
        $(classSelect).append($('<option>', {
            value: data.id,
            text: data.title
        }));
      })
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
          brand.push({"id" : data.product_brand.id, "title" : data.product_brand.title});
        });
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
                      brand.push({"id" : dataProduct.id, "title" : dataProduct.title});
                    });
                  }
                }
              });
            }
            return;
          }
        });
    }

    function setBrand(){
      valCategory =  $(classCategories).find(":selected").val()
      valSubCategory =  $(classSubcategories).find(":selected").val()
      getBrand(valSubCategory,valCategory)
      addOptionSelect(classBrand,brand)
    }

    function setDefaultBrand(){
      brand=[{"id" : "", "title" : ""}];
    }

  </script>

  <script>
    //Default
    setDefaultCategory();
    //Set Data Category
    getCategory();
    addOptionSelect(classCategories,category);

  </script>
@endsection