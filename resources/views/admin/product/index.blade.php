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
                                {{-- <ul class="dropdown-menu exp-drop" role="menu">
                                    <li>
                                        <a href="#"
                                            onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false'});">
                                            <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});">
                                            <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON
                                            (ignoreColumn)</a>
                                    </li>
                                    <li><a href="#"
                                            onclick="$('#dataTableExample1').tableExport({type:'json',escape:'true'});">
                                            <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON (with
                                            Escape)</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#"
                                            onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                            <img src="assets/dist/img/xml.png" width="24" alt="logo"> XML</a>
                                    </li>
                                    <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'sql'});">
                                            <img src="assets/dist/img/sql.png" width="24" alt="logo"> SQL</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#"
                                            onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});">
                                            <img src="assets/dist/img/csv.png" width="24" alt="logo"> CSV</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            onclick="$('#dataTableExample1').tableExport({type:'txt',escape:'false'});">
                                            <img src="assets/dist/img/txt.png" width="24" alt="logo"> TXT</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#"
                                            onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});">
                                            <img src="assets/dist/img/xls.png" width="24" alt="logo"> XLS</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            onclick="$('#dataTableExample1').tableExport({type:'doc',escape:'false'});">
                                            <img src="assets/dist/img/word.png" width="24" alt="logo"> Word</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            onclick="$('#dataTableExample1').tableExport({type:'powerpoint',escape:'false'});">
                                            <img src="assets/dist/img/ppt.png" width="24" alt="logo"> PowerPoint</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#"
                                            onclick="$('#dataTableExample1').tableExport({type:'png',escape:'false'});">
                                            <img src="assets/dist/img/png.png" width="24" alt="logo"> PNG</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});">
                                            <img src="assets/dist/img/pdf.png" width="24" alt="logo"> PDF</a>
                                    </li>
                                </ul> --}}
                            </div>
                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <div class="table-responsive">
                                <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="info">
                                            <th>images</th>
                                            <th> Name</th>
                                            <th>price</th>

                                            <th>description</th>
                                            <th>status</th>
                                            <th>Remove</th>

                                        </tr>
                                    </thead>
                                    @foreach ($products as $product)
                                        <tbody>
                                            <tr>
                                                <td><img src="{{ $product['images'] }}" class="img-circle" alt="User Image"
                                                        width="50" height="50"> </td>
                                                <td>{{ $product['name'] }}</td>
                                                <td>{{ $product['price'] }}</td>

                                                <td>{{ $product['description'] }}</td>

                                                <td>
                                                    <input type="checkbox" class="productStatus btn btn-success"
                                                        rel="{{ $product->id }}" data-toggle="toggle" data-on="Enabel"
                                                        data-off="off" data-onstyle="success" data-offstyle="danger"
                                                    @if ($product['status'] == '1')
                                                        checked
                                                    @endif>
                                                    <div id="myElem" style="display:none;" class=" alert alert-success">Status Enable </div>
                                                   
                                                </td>
                                                <td>
                                                    <a href="{{ route('product.delete', ['id' => $product->id]) }}">
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal" data-target="#customer2">
                                                            <i class="fa fa-trash-o"></i>

                                                        </button>
                                                        <a href="{{ route('product.edit', ['id' => $product->id]) }}"><button
                                                                class="btn btn-success" style='font-size:7px'>Edit
                                                            </button>
                                                        </a>

                                                        </button>
                                                        <a href="{{ route('attribute.add', ['id' => $product->id]) }}"><button
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

        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group" id="buttonexport">
                                <a href="">
                                    <h4>Add attribute</h4>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="btn-group">
                                <div class="buttonexport" id="buttonlist">

                                </div>

                            </div>
                            <div class="table-responsive">
                                <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="info">



                                            <th>SKU</th>
                                            <th>size</th>
                                            <th>price</th>
                                            <th>stock</th>
                                            <th>remove</th>



                                        </tr>
                                    </thead>
                                    @foreach ($attribute as $attribute)
                                        <tbody>
                                            <tr>
                                                <td>{{ $attribute['SKU'] }}</td>
                                                <td>{{ $attribute['size'] }}</td>
                                                <td>{{ $attribute['price'] }} </td>
                                                <td>
                                                    {{ $attribute['stock'] }}
                                                <td> <a href="{{ route('attribute.delete', ['id' => $attribute->id]) }}">
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal" data-target="#customer2">
                                                            <i class="fa fa-trash-o"></i></a>
                                                    </button>
                                                    <a href="{{ route('attribute.edit', ['id' => $attribute->id]) }}">
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal" data-target="#customer2">
                                                            <i class="fa fa--o"></i> Edit</button></a>

                                                </td>


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
