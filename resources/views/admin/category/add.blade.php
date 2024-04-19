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
                     <h1>Add category</h1>
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
                                <form action="{{ url('attribute/store') }}"  class="col-sm-6" method="post" id="loginForm" novalidate>
                                    @csrf
                                     <div class="form-group">
                                         <label>category name</label>
                                         <input type="text" class="form-control" name="name" placeholder="Enter category Name"
                                             required>
                                     </div>
                                     <div class="form-group">
                                         <label>parent category</label>
<select name="status" id="parent_id" class="form-control">
    <option value="0">parent_category</option></select>                                            
                                     </div>
                                     <div class="form-group">
                                         <label>url</label>
                                         <input type="text" name="url" class="form-control" placeholder="Enter url"
                                             required>
                                     </div>
                                     <div class="form-group">
                                         <label>description</label>
                                         <input type="text" name="descrition" class="form-control" placeholder="Enter description" required>
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
