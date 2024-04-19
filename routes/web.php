<?php
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CheckoutController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoupenController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\MyaccountController;
use Illuminate\Support\Facades\Route;

//wayshop Frontend routes

Route::get('/',[indexcontroller::class,'index']);
Route::get('/detail',[indexcontroller::class,'detail']);
Route::get('/product/{name}',[indexcontroller::class,'productDetail'])->name('product.detail');


Route::get('/myaccountheader', function () {
    return view('components/myaccountheader'); 
});



//wayshop Frontend routes End Here 




//Admin Backend Routes Start Here

Route::get('/adminlogin', function () {
    return view('admin/adminlogin');
});
Route::get('/adminpanel', function () {
    return view('admin.dashboard');
});

Route::post("/adminlogin",[AdminController::class,"adminlogin"]);


//Product Routes
Route::controller(ProductController::class)->group(function () {
    Route::get('/products','index')->name('products');              // all Product List
    Route::get('/add-product','addProduct')->name('product.add');   // get Product blade
    Route::post("/product/store","store")->name('product.store');   // Store Product
    Route::get("/product/view/{id}","view")->name('product.view');
    Route::get('product/edit/{id}','edit')->name('product.edit');  //edit product
    Route::post("/product/update/{id}","update")->name('product.update'); // product edit update
    Route::get("/product/delete/{id}","delete")->name('product.delete');

   
     // product delete  
});


//banners Routes
Route::controller(BannerController::class)->group(function () {
    Route::get('/banners','index')->name('banners');              // all Product List
    Route::get('/add-banner','addbanner')->name('banner.add');   // get Product blade
    Route::post("/banner/store","store")->name('banner.store');   // Store Product
    Route::get("/banner/view/{id}","view")->name('banner.view');
    Route::get('banner/edit/{id}','edit')->name('banner.edit');  //edit product
    Route::post("/banner/update/{id}","update")->name('banner.update'); // product edit update
    Route::get("/banner/delete/{id}","delete")->name('banner.delete'); // product delete  
});


//product attribute route here 
Route::controller(AttributeController::class)->group(function () {
    Route::get('/attribute','index')->name('attribute');              // all Product List
    Route::get('/attribute/add/{id}','add_attribute')->name('attribute.add');   // get Product blade
    Route::post("/attribute/store/{id}","store")->name('attribute.store');   // Store Product
    Route::get("/attribute/view/{id}","view")->name('attribute.view');
    Route::get('attribute/edit/{id}','edit')->name('attribute.edit');  //edit product
    Route::post("/attribute/update/{id}","update")->name('attribute.update'); // product edit update
    Route::get("/attribute/delete/{id}","delete")->name('attribute.delete'); // product delete  
});
// my account route here

Route::controller(MyaccountController::class)->group(function () {
    Route::get('/Myaccount','index')->name('Myaccount'); 
    Route::get('/profile','profile')->name('profile'); 
    Route::get('/Myaccount-login','login')->name('Myaccount.login');
    Route::post("login","check")->name('Myaccount.store');   // get Product blade
    Route::get("/Myaccount-resister","resister")->name('Myaccount.resister');   // Store Product
    Route::post("resister","store")->name('Myaccount.store');  
    Route::get('/logout','logout')->name('logout'); 
    // Store Product


});
//cart routes here
Route::controller(CartController::class)->group(function () {
    Route::get('/mycart','mycart')->name('cart');              // all Product List
    Route::post('/add_to_cart','add_to_cart')->name('cart.add');   // get Product blade
    Route::get("/delete/{id}","delete")->name('cart.update'); // product edit update
    Route::get('/apply','apply_coupen')->name('cart');    
});


//product category route here

Route::controller(CategoryController::class)->group(function () {
               
    Route::get('/category-add','add')->name('category.add');   // get Product blade
    Route::post("/attribute/store","store")->name('attribute.store');   // Store Product
    Route::get("/attribute/view/{id}","view")->name('attribute.view');
    Route::get('attribute/edit/{id}','edit')->name('attribute.edit');  //edit product
    Route::post("/attribute/update/{id}","update")->name('attribute.update'); // product edit update
    Route::get("/attribute/delete/{id}","delete")->name('attribute.delete'); // product delete
    Route::get('/category_t',[CategoryController::class,'category_t']);
    Route::get('/category_w',[CategoryController::class,'category_w']);
    Route::get('/category_s',[CategoryController::class,'category_s']);

});


//coupens routes here start


Route::controller(CoupenController::class)->group(function () {
    Route::get('/coupens','coupens')->name('Coupens'); 
    Route::get('/add_coupen','add')->name('Coupen.add');   // get Product blade
    Route::post("/Coupen/store","store")->name('Coupen.store');   // Store Product
    Route::get("/Coupen/view/{id}","view")->name('Coupen.view');
    Route::get('edit/{id}','edit')->name('Coupen.edit');  //edit product
    Route::post("update/{id}","update")->name('Coupen.update'); // product edit update
    Route::get("/Coupen/delete/{id}","delete")->name('Coupen.delete'); // product delete
  

});


//checkout routes
Route::get("/buy/{id}",[CheckoutController::class,"buy"] ); 
//payment route

Route::post("/checkout",[PaymentController::class,"checkout"] ); 
Route::get("/payment",[PaymentController::class,"payment"] )->name('payment'); 




 

//products
// add-product
//product-store
// product/edit/{1}
// product-update
//product/view/{}
// banner/delete/{}







































