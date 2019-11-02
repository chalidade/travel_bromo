<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="home.php?id=home"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-book"></i> <span>Booking</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="home.php?id=input_booking">Input Booking</a></li>
          <li><a href="home.php?id=data_booking">Data Booking</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-money"></i> <span>Pembayaran</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="home.php?id=data_pembayaran">Data Pembayaran</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-calendar"></i> <span>Paket</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="home.php?id=input_paket">Input Paket</a></li>
          <li><a href="home.php?id=data_paket">Data Paket</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-hotel"></i> <span>Hotel</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="home.php?id=input_hotel">Input Hotel</a></li>
          <li><a href="home.php?id=data_hotel">Data Hotel</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-users"></i> <span>User</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="home.php?id=input_user">Input User</a></li>
          <li><a href="home.php?id=data_user">Data User</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-gear"></i> <span>Home Menu</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="home.php?id=preference_home">Home</a></li>
          <li><a href="home.php?id=preference_gallery">Gallery</a></li>
          <li><a href="home.php?id=message">Message</a></li>

        </ul>
      </li>
      <li><a href="index.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
