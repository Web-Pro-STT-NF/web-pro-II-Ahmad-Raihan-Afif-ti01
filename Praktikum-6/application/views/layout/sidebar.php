   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <!-- Brand Logo -->
       <a href="<?php echo base_url() ?>index3.html" class="brand-link">
           <img src="<?php echo base_url() ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
           <span class="brand-text font-weight-light">STT Nurul Fikri</span>
       </a>

       <!-- Sidebar -->
       <div class="sidebar">
           <!-- Sidebar user (optional) -->
           <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                   <img src="<?php echo base_url() ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
               </div>
               <div class="info">
                   <a href="#" class="d-block">Ahmad Raihan Afif TI01</a>
               </div>
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
                   <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-tachometer-alt"></i>
                           <p>
                               Praktikum 6
                               <i class="right fas fa-angle-left"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="<?php echo base_url() ?>index.php/mahasiswa/index" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Daftar Mahasiswa</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?php echo base_url() ?>index.php/dosen/index" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Daftar Dosen</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?php echo base_url() ?>index.php/matakuliah/index" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Daftar MataKuliah</p>
                               </a>
                           </li>
                       </ul>
                   </li>
               </ul>
           </nav>
           <!-- /.sidebar-menu -->
       </div>
       <!-- /.sidebar -->
   </aside>