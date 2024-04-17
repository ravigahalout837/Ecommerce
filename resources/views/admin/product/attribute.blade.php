    
    
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
                     <h1> Product attribute</h1>
                     <small> add Product attribute </small>
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
                                <form action="{{url('/attribute/store/'.$productdetail->id)}}"  class="col-sm-6" method="post" id="loginForm" novalidate>
                                    @csrf
                                     <div class="form-group">
                                         <label>Product Name</label>{{ $productdetail->name }}
                                           
                                     </div>
                                     <div class="form-group">
                                         <label>Product code</label>
                                         {{ $productdetail->code }}
                                     </div>
                                     <div class="form-group">
                                         <label>color</label>
                                         {{ $productdetail->color }}
                                     </div>
                                     <div class="form-group">
                                        <div class="field_wrapper">
                                            <div style="display: flex">
                                                <input type="text" name="SKU[]" id="SKU" placeholder="SKU" class="form-control" style="width:120px; margin-right:5px; "/>
                                                <input type="text" name="size[]" id="SKU" placeholder="size" class="form-control" style="width:120px; margin-right:5px; "/>
                                                <input type="text" name="price[]" id="SKU" placeholder="price" class="form-control" style="width:120px; margin-right:5px;"/>
                                               <input type="text" name="stock[]" id="SKU" placeholder="stock" class="form-control" style="width:120px; margin-right:5px;  "/>
                                           <a href="javascript:void(0);" class="add_button" title="add field">add</a>
                                            </div>
                                        </div>
                                     </div>
                                  <div>
                                        <button class="btn btn-add">Add attributes</button>

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

