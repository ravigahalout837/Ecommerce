    
    
    @extends('admin.layout.app')
    @section('content')
    <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
             <!-- Content Header (Page header) -->
             <section class="content-header">
                 <div class="header-icon">
                     <i class="fa fa-sticky-note-o"></i>
                 </div>
                 <div class="header-title">
                     <h1>Add Product</h1>
                     <small>Product list</small>
                 </div>
             </section>
             <!-- Main content -->
             <section class="content">
                 <div class="row">
                     <!-- Form controls -->
                     <div class="col-sm-12">
                         <div class="panel panel-bd lobidrag">
                             <div class="panel-heading">
                                 <div class="btn-group" id="buttonlist">
                                     <a class="btn btn-add " href="{{ route('products') }}">
                                         <i class="fa fa-list"></i> Products</a>
                                 </div>
                             </div>
                             <div class="panel-body">
                                <form action="{{route('product.store')}}"  class="col-sm-6" method="post" id="loginForm" novalidate>
                                    @csrf
                                     <div class="form-group">
                                         <label>Product Name</label>
                                         <input type="text" class="form-control" name="name" placeholder="Enter product Name"
                                             required>
                                     </div>
                                     <div class="form-group">
                                         <label>Product code</label>
                                         <input type="text" class="form-control" placeholder="Enter Product Code"  name="code"
                                             required>
                                     </div>
                                     <div class="form-group">
                                         <label>color</label>
                                         <input type="text" name="color" class="form-control" placeholder="Enter Quantity"
                                             required>
                                     </div>
                                     <div class="form-group">
                                         <label>Price</label>
                                         <input type="text" name="price" class="form-control" placeholder="Enter Price" required>
                                     </div>
                                    
                                     <div class="form-group">
                                         <label>description</label>
                                         <input type="text"  class="form-control" name="description" placeholder="Enter description"
                                             required>
                                     </div>
                                     <div class="form-group">
                                        <label>status</label>
                                        <input type="text" name="status" class="form-control" placeholder="Enter product status " required>
                                    </div>
                                    
                                     <div class="form-group">
                                         <label>images</label>
                                         <input type="text" name="images" class="form-control" placeholder="Enter images link" required>
                                     </div>
                                    
                                     <div>
                                        <button class="btn btn-add">Add product</button>

                                    </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
             <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
@endsection
