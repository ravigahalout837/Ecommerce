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
                                    <i class="fa fa-list"></i> coupen</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="{{url('update', ['id' => $coupen->id]) }}" class="col-sm-6" method="post" id="loginForm"
                                novalidate>
                                @csrf
                               
                                <div class="form-group">
                                    <label>coupen code</label>
                                    <input type="text" class="form-control" name="coupen_code"
                                        placeholder="Enter coupen code " value="{{ $coupen->coupen_code }}" required>
                                </div>
                                <div class="form-group">
                                    <label>amount</label>
                                    <input type="text" class="form-control" name="textstyle"
                                        placeholder="Enter amount" value="{{ $coupen->ammount }}" required>
                                </div>
                                <div class="form-group">
                                    <label>expiry date</label>
                                    <input type="text" class="form-control" name="link"
                                        placeholder="Enter date" value="{{ $coupen->expiry }}" required>
                                </div>
                                <div class="form-group">
                                    <label>status</label>
                                    <input type="text" class="form-control" name="link"
                                        placeholder="Enter status" value="{{ $coupen->status }}" required>
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
