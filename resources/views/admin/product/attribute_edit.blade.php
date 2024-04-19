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
                <h1>Edit attribute</h1>
                <small>attribute list</small>
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
                                    <i class="fa fa-list"></i> attribute</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="{{route('attribute.update', ['id' => $attribute->id]) }}" class="col-sm-6" method="post" id="loginForm"
                                novalidate>
                                @csrf
                               
                                <div class="form-group">
                                    <label> SKU</label>
                                    <input type="text" class="form-control" name="SKU"
                                        placeholder="Enter Atribute SKU Name" value="{{ $attribute->SKU }}" required>
                                </div>
                                <div class="form-group">
                                    <label>attribute size</label>
                                    <input type="text" class="form-control" name="size"
                                        placeholder="Enter Attribute size" value="{{ $attribute->size }}" required>
                                </div>
                                <div class="form-group">
                                    <label>attribute price </label>
                                    <input type="text" class="form-control" name="price"
                                        placeholder="Enter atrbute price" value="{{ $attribute->price }}" required>
                                </div>
                                
                                
                                <div>
                                    <button class="btn btn-add">save</button>
                                   
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
