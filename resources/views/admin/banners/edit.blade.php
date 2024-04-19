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
                                        <i class="fa fa-list"></i> Banners</a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="{{route('banner.update', ['id' => $banner->id]) }}" class="col-sm-6" method="post" id="loginForm"
                                    novalidate>
                                    @csrf
                                   
                                    <div class="form-group">
                                        <label>banner Name</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Enter product Name" value="{{ $banner->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>banner text-style</label>
                                        <input type="text" class="form-control" name="textstyle"
                                            placeholder="Enter product code" value="{{ $banner->textstyle }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>banner link</label>
                                        <input type="text" class="form-control" name="link"
                                            placeholder="Enter product code" value="{{ $banner->link }}" required>
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
