<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('images/logo.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           </a>
        </li>


        <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/barang')}}"><i class="fa fa-circle-o"></i>Daftar Barang</a></li>
            <li><a href="{{url('/kategori')}}"><i class="fa fa-circle-o"></i>Kategori Barang</a></li>
          </ul>
        </li>


        <li >
          <a href="{{url('/pelanggan')}}">
            <i class="fa fa-calendar"></i> <span>Pelanggan</span>
          </a>
        </li>
        <li>
          <a href="{{url('/supplier')}}">
            <i class="fa fa-calendar"></i> <span>Supplier</span>
          </a>
        </li>
        <li>
          <a href="{{url('/marketing')}}">
            <i class="fa fa-calendar"></i> <span>Sales</span>
          </a>
        </li>
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Laporan Penjualan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Laporan Pembelian</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Laporan Stok Opname</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Laporan Operasional</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Laporan Tagihan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="{{url('/adminship')}}">
            <i class="fa fa-calendar"></i> <span>List Ship</span>
          </a>
        </li>
        <li>
          <a href="{{url('/adminpartner')}}">
            <i class="fa fa-calendar"></i> <span>List Partner</span>
          </a>
        </li>
        
      <li>
          <a href="{{url('/admintestimonial')}}">
            <i class="fa fa-calendar"></i> <span>List Testimonial</span>
          </a>
        </li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->