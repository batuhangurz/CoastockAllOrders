<!-- Brand Logo -->
<a class="brand-link">
  <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
  <span class="brand-text font-weight-light">Coastock Operation</span>
</a>

<!-- Sidebar -->
<div class="sidebar">


  <div class="image">

  </div>



  <!-- SidebarSearch Form -->
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

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
        <a href="purchase" class="{{ (request()->is('purchase')) ? 'nav-link active' : 'nav-link' }}">
          <i class="fas fa-cash-register"></i>
          <p>
            Purchase
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="orders" class="{{ (request()->is('orders')) ? 'nav-link active' : 'nav-link' }}">
          <i class="fas fa-shopping-basket"></i>
          <p>
            Orders
          </p>
        </a>
      </li>
    </ul>

  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->