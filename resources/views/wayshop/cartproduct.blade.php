@include('layout.header')

@include('components.mycss')
<div class="cart-box-main">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="table-main table-responsive">
                  <table class="table" >
                      <thead>
                          <tr>
                              <th>Images</th>
                              <th>Product Name</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th>Total</th>
                              <th>Remove</th>
                          </tr>
                      </thead>
                      @foreach($cart_here as $item)
                      <tbody>
                          <tr>
                          
                              <td class="thumbnail-img">
                                  <a href="#">
            <img style="width:150px;height:140px;" class="img-fluid" src="{{$item->GetProductData['images']}}" alt="" />
          </a>
                              </td>
                              <td class="name-pr">
                                  <a href="#">
                                    {{$item->GetProductData['name']}}
          </a>
                              </td>
                              <td class="price-pr">
                                  <p>₹{{$item->GetProductData['price']}}</p>
                              </td>
                              <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                              <td class="total-pr">
                                  <p>₹{{$item->GetProductData['price']}}</p>
                              </td>
                           
                              <td class="remove-pr">
                                  
                                <button class="btn btn-danger" type="button">Remove </button>
         
                              </td>
                              
                              @endforeach

                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      <div class="row my-5">
          <div class="col-lg-6 col-sm-6">
              <div class="coupon-box">
                <form method="post" action="/apply">

                  <div class="input-group input-group-sm">
                      <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                      <div class="input-group-append">
                          <button class="btn btn-danger" type="button">Apply Coupen</button>
                      </div>
                  </div>
                </form>

              </div>
          </div>
         
      </div>

      

  </div>
</div>