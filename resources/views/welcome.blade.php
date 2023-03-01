@extends('layouts.web')

@section("main")
<section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Inspired products</span></h2>
            <p>Bring called seed first of third give itself now ment</p>
          </div>
        </div>
      </div>

      <div class="row">
        @foreach ($products as $product )
        <div class="col-lg-3 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img class="img-fluid w-100" src="{{ $product->image }}" alt="" />
                <div class="p_icon">
                  <a href="#">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-heart"></i>
                  </a>
                  <add-to-cart :product-id = "{{ $product->id }}"></add-to-cart>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4>Latest men’s sneaker</h4>
                </a>
                <div class="mt-3">
                  <span class="mr-4">$25.00</span>
                  <del>$35.00</del>
                </div>
              </div>
            </div>
          </div>
  
        @endforeach
        
      

        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="{{asset("assets/img/product/inspired-product/i8.jpg")}}" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <add-to-cart></add-to-cart>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men’s sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection