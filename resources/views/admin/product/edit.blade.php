    @extends('admin.layout.app')
    @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="header-icon">
                    <i class="fa fa-sticky-note-o"></i>
                </div>
                <div class="header-title">
                    <h1>Edit Product</h1>
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
                                <form action="{{route('product.update', ['id' => $product->id]) }}" class="col-sm-6"
                                    method="post" id="loginForm" novalidate>
                                    @csrf

                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Enter product Name" value="{{ $product->name }}" required>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label>Product code</label>
                                        <input type="text" class="form-control" name="code"
                                            placeholder="Enter product code" value="{{ $product->code }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Product color</label>
                                        <input type="text" class="form-control" name="color"
                                            placeholder="Enter product color" value="{{ $product->color }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Product price</label>
                                        <input type="text" class="form-control" name="price"
                                            placeholder="Enter product price" value="{{ $product->price }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Product description</label>
                                        <input type="text" class="form-control" name="description"
                                            placeholder="Enter product description" value="{{ $product->description }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Product images</label>
                                        <input type="text" class="form-control" name="images"
                                            placeholder="Enter product images" value="{{ $product->images }}" required>
                                    </div>

                                    <div>
                                        <button class="btn btn-add">Update</button>

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
