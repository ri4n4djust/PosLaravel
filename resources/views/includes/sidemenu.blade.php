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
         <li>
          <a href="{{url('/adminslider')}}">
            <i class="fa fa-calendar"></i> <span>Slider Home List</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Applicant</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/TambahApplicant')}}"><i class="fa fa-circle-o"></i>Add Applicant</a></li>
            <li><a href="{{url('/adminapplicant')}}"><i class="fa fa-circle-o"></i>Applicant List</a></li>
            <li><a href="{{url('/yeslist')}}"><i class="fa fa-circle-o"></i>Applicant Approve</a></li>
            <li><a href="{{url('/nolist')}}"><i class="fa fa-circle-o"></i>Applicant No Approve</a></li>
            <li><a href="{{url('/pending')}}"><i class="fa fa-circle-o"></i>Applicant Pending</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Repeater</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/adminrepeater')}}"><i class="fa fa-calendar"></i> <span>Repeater List</span></a></li>
            <li><a href="{{url('/repeateronprogres')}}"><i class="fa fa-calendar"></i> <span>Repeater Onprogres</span></a></li><li>
            <li><a href="{{url('/repeateronboard')}}"><i class="fa fa-calendar"></i> <span>Repeater On Board</span></a></li><li>
          </ul>
        </li>
        <li>
          <a href="{{url('/adminberita')}}">
            <i class="fa fa-calendar"></i> <span>List News</span>
          </a>
        </li>
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>List Potition</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/department')}}"><i class="fa fa-circle-o"></i>Department</a></li>
            <li><a href="{{url('/adminposisi')}}"><i class="fa fa-circle-o"></i>List Potition</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('jdlgaleri')}}"><i class="fa fa-circle-o"></i>Album Name</a></li>
            <li><a href="{{url('/admingaleri')}}"><i class="fa fa-circle-o"></i>List Gallery</a></li>
          </ul>
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