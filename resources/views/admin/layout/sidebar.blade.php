         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="/adminpanel"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>category</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        {{-- <li><a href="{{ route('product.banner') }}">Add Banners</a></li> --}}
                        <li><a href="{{ url('category-add') }}">add category</a></li>
                        <li><a href="{{ url('add-banner') }}">view category Banners</a></li>



                       
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>Product</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{ route('product.add') }}">Add Products</a></li>
                        <li><a href="{{ route('products') }}">View Products</a></li>

                       
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>Banners</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        {{-- <li><a href="{{ route('product.banner') }}">Add Banners</a></li> --}}
                        <li><a href="{{ route('banners') }}">View Banners</a></li>
                        <li><a href="{{ url('add-banner') }}">add Banners</a></li>



                       
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="">
                     <i class="fa fa-users"></i><span>Coupons</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{ url('add_coupen') }}">Add Coupon</a></li>
                        <li><a href="{{ url('coupens') }}">View Coupon</a></li>

                       
                     </ul>
                  </li>
                  
            <!-- /.sidebar -->
         </aside>