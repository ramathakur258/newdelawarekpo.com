
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png')?>"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Delaware KPO Admin</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/dashboard');?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>         
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/blog');?>" class="nav-link">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Blog
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/service');?>" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Services
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/faq');?>" class="nav-link">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>
                FAQ
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/user');?>" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Contact Us
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/auth/login'); ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
               Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>