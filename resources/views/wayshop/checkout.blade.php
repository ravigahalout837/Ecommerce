@extends('layout.master')
<div class="col-md-6 col-lg-8">
    <div class="order-box">
        <div class="title-right">
            <h3>Your order</h3>
        </div>
        <div class="d-flex">
            <div class="font-weight-bold">Product</div>
            <div class="ml-auto font-weight-bold">Total</div>
        </div>
        <hr class="my-1">
        <div class="d-flex">
            <h4>Product Name </h4>
            <div class="ml-auto font-weight-bold"> {{ $item['name'] }} </div>
        </div>
        <div class="d-flex">
            <h4>    </h4>
            <a href="#">
                <img style="width:90px;height:80px;" class="img-fluid" src="{{$item['images']}}" alt="" />
              </a>        </div>
        <hr class="my-1">
       
        <div class="d-flex">
            <h4>Tax</h4>
            <div class="ml-auto font-weight-bold"> $ 2 </div>
        </div>
        <div class="d-flex">
            <h4>Shipping Cost</h4>
            <div class="ml-auto font-weight-bold"> Free </div>
        </div>
        <hr>
        <div class="d-flex gr-total">
            <h5>Grand Total</h5>
            <div class="ml-auto h5"> {{ $item['price'] }} </div>
        </div>
        <hr> </div>

</div>

</div>
    
</div>

<div class="col-sm-6 col-lg-12 mb-3">
    <div class="checkout-address">
        <div class="title-left">
            <h3>Billing address</h3>
        </div>
        <form method="post" action="/checkout" class="needs-validation" novalidate>
            <div class="row">
                @csrf
                <div class="col-md-12 mb-4">
                    <label for="firstName">First name *</label>
                    <input type="text" class="form-control" name="name" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback"> Valid first name is required. </div>
                </div>
                
            </div>
         
            </div>
            <div class="mb-3">
                <label for="email">Email Address *</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="">
                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
            </div>
            <div class="mb-3">
                <label for="address">Address 1*</label>
                <input type="text" class="form-control"  name="address1" id="address" placeholder="Please enter your shipping address." required>
                <div class="invalid-feedback"> Please enter your shipping address. </div>
            </div>
            <div class="mb-3">
                <label for="address">Shipping Address 2*</label>
                <input type="text" class="form-control"  name="address2" id="address" placeholder="Please enter your shipping address." required>
                <div class="invalid-feedback"> Please enter your shipping address. </div>
            </div>
            <div class="mb-3">
                <label for="address">  PIN Number</label>
                <input type="text" class="form-control"  name="number" id="address" placeholder="Please enter your  contact number." required>
                <div class="invalid-feedback"> Please enter your pin number. </div>
            </div>
           
           
           
                <br><br>
                <div>
                    <button class="btn btn-danger w-100">Continue</button>
                   
                </div>
            </form>
                </div>
               
          

@section('content')