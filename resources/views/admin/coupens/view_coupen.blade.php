@extends('admin.layout.app')
@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-users"></i>
            </div>
            <div class="header-title">
                <h1>Customer</h1>
                <small>Customer List</small>
            </div>
        </section>
        <div id="message_success" style="display:none;" class=" alert alert-success">Status Enable </div>
        <div id="message_error" style="display:none;" class=" alert alert-success">Status disable </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group" id="buttonexport">
                                <a href="#">
                                    <h4>Add product</h4>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <div class="btn-group">
                                <div class="buttonexport" id="buttonlist">
                                    <a class="btn btn-add" href="{{ url('add-product') }}"> <i class="fa fa-plus"></i> Add
                                        product
                                    </a>
                                </div>
                               
                            </div>
                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <div class="table-responsive">
                                <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="info">
                                            
                                            <th> coupen code</th>
                                            <th> expiry date </th>

                                            <th>status</th>
                                            <th>Tools</th>
                                           

                                        </tr>
                                    </thead>
                                    @foreach ($mycoupen as $mycoupen)
                                        <tbody>
                                            <tr>
                                               
                                                <td>{{ $mycoupen['ammount'] }}</td>
                                                <td>{{ $mycoupen['expiry_date'] }}</td>


                                                <td>
                                                    <input type="checkbox" class="productStatus btn btn-success"
                                                        rel="{{ $mycoupen->id }}" data-toggle="toggle" data-on="Enabel"
                                                        data-off="off" data-onstyle="success" data-offstyle="danger"
                                                    @if ($mycoupen['status'] == '1')
                                                        checked
                                                    @endif>
                                                    <div id="myElem" style="display:none;" class=" alert alert-success">Status Enable </div>
                                                   
                                                </td>
                                                <td>
                                                    <a href="">
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal" data-target="#customer2">
                                                            <i class="fa fa-trash-o"></i>

                                                        </button>
                                                        <a href="{{ url('edit', ['id' => $mycoupen->id]) }}"><button
                                                                class="btn btn-success" style='font-size:7px'>Edit
                                                            </button>
                                                        </a>

                                                        </button>
                                                        <a href="{{ route('attribute.add', ['id' => $mycoupen->id]) }}"><button
                                                                class="btn btn-primary" style='font-size:7px'>Attribute
                                                            </button>
                                                        </a>
                                                    </a>

                                                </td>
                                            </tr>

                                            </a>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


</div>

@endsection