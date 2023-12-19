

<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href=<?= base_url('Dashboard') ?> class="brand-link">
<img src="<?php echo base_url();?>assets/AdminLTE3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="<?php echo base_url();?>assets/AdminLTE3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">Alexander Pierce</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item menu-open">
    <a href="#" class="nav-link active">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
    Dashboard
    <i class="right fas fa-angle-left"></i>
    </p>
    </a>


    <!-- Memanggil Controler Barang -->
 <ul class="nav nav-treeview">
    <li class="nav-item">
    <a href=<?= base_url('User') ?> class="nav-link">    
    <i class="far fa-circle nav-icon"></i>
    <p>Data User</p>
    </a>
    </li>
   



</ul>
</nav>

</div>

</aside>