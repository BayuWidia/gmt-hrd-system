<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?php echo e(asset('/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Alexander Pierce</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </form>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo e(url('/admin')); ?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-pie-chart"></i>
        <span>Kelola Produk</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo e(url('/product')); ?>"><i class="fa fa-circle-o"></i> Lihat Semua Produk</a></li>
        <li><a href="<?php echo e(url('/product/create')); ?>"><i class="fa fa-circle-o"></i> Tambah Produk Baru</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-laptop"></i>
        <span>Kelola Kategori Produk</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo e(url('/kategori')); ?>"><i class="fa fa-circle-o"></i> Lihat Semua Kategori Produk</a></li>
        <li><a href="<?php echo e(url('/kategori/create')); ?>"><i class="fa fa-circle-o"></i> Tambah Kategori Baru</a></li>
      </ul>
    </li>
  </ul>
</section>
