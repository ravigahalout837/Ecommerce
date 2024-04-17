@extends('admin.layout.app')
@section('content')
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
            dateFormat:'yy-mm-dd'
        });
    </script>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-sticky-note-o"></i>
            </div>
            <div class="header-title">
                <h1>Add coupens</h1>
                <small></small>
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
                            <form action="{{ route('Coupen.store') }}" class="col-sm-6" method="post" id="loginForm"
                                novalidate>
                                @csrf
                                <div class="form-group">
                                    <label>coupen code</label>
                                    <input type="text" class="form-control" name="coupen_code"
                                        placeholder="Enter coupen code" required>
                                </div>

                                <div class="form-group">
                                    <label>ammount</label>
                                    <input type="text" name="ammount" class="form-control" placeholder="Enter ammount"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>ammount type</label>
                                    <select name="ammount_type" placeholder="percentage" id="parent_id"
                                        class="form-control">
                                        <option >percentage</option>
                                        <option >fixed</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>expiry date</label>
                                    <input type="text" name="expiry_date" id="datepicker" class="form-control"
                                        placeholder="Enter expiry date" required>
                                </div>
                                <div class="form-group">
                                    <label> status</label>
                                    <select name="status" placeholder="status" id="parent_id"
                                        class="form-control">

                                        <option value="1">enable</option>
                                        <option value="0">disable</option>

                                    </select>
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
