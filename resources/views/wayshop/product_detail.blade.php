@extends('layout.master')

@section('content')
    <style>
        .bootstrap-select.btn-group>.dropdown-toggle {
            height: 8% !important;
        }
    </style>
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img style="width:300px;height:450px;" class="d-block w-100"
                                    src="{{ $product->images }}" alt="First slide"> </div>

                        </div>


                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>{{ $product->name }}</h2>
                        <h5>Price : ₹ {{ $product->price }}</h5>
                        <br>
                        <p>
                        <h4>Short Description:</h4>
                        <p>{{ $product->description }} </p>
                        <ul>
                            <br><br>
                            <li>
                                <div class="form-group size-st">
                                    <label class="size-label">Size</label>
                                    <select id="basic" class="selectpicker show-tick form-control">
                                        <option value="0">Size</option>
                                        <option value="0">S</option>
                                        <option value="1">M</option>
                                        <option value="1">L</option>
                                        <option value="1">XL</option>
                                        <option value="1">XXL</option>
                                        <option value="1">3XL</option>
                                        <option value="1">4XL</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="form-group quantity-box">
                                    <label class="control-label">Quantity</label>
                                    <input class="form-control" value="0" min="0" max="20" type="number">
                                </div>
                            </li>
                        </ul>
                        <form action="/add_to_cart" method="post">
                            <input type="hidden" name="product_id" value="{{$product['id']}}">
                            
                            @csrf
                            <a href="/buy/{{$product['id']}}" class="btn btn-danger w-100">buy Now</a>
                        </form>

                        <div class="price-box-bar">
                            <div class="cart-and-bay-btn">
                              
                                <a class="btn btn-danger" data-fancybox-close="" href="#">Add to cart</a>
                            </div>
                        </div>
                        <br>


                        <div class="share-bar">
                            <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                            <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus"
                                    aria-hidden="true"></i></a>
                            <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p"
                                    aria-hidden="true"></i></a>
                            <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    @endsection
