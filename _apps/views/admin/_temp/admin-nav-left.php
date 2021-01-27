    <nav class="navbar-default navbar-static-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
          <li class="nav-header">
            <div class="profile-element text-center">
              <span><img alt="image" class="img-circle" src="<?php echo base_url('_library/admin/img/logo/logo-gt-small.png') ?>" /></span>
              <span class="clear"> <span class="block m-t-xs"> <h3><strong class="font-bold text-white">Digital Library</strong></h3></span>
            </div>
            <div class="logo-element">DigiLib</div>
          </li>

          <li <?php echo ($this->uri->segment(2) === 'home') ? 'class="active"' : 'class=""' ?>>
            <?php echo anchor('admin/home/', '<i class="fa fa-diamond"></i> <span class="nav-label">Dashboard</span>'); ?>
          </li>
          <!-- controller setting -->
          <li <?php echo ($this->uri->segment(2) === 'setting') ? 'class="active"' : 'class=""' ?>>
            <a href="#"><i class="fa fa-gear"></i> <span class="nav-label">Setting</span> <span class="fa arrow"></span></a>
            <ul <?php echo ($this->uri->segment(2) === 'setting') ? 'class="nav nav-second-level collapse in"' : 'class="nav nav-second-level collapse"' ?>>
              <li <?php echo ($this->uri->segment(3) === 'profile') ? 'class="active"' : 'class=""' ?>>
                <?php echo anchor('admin/setting/profile', 'Profile Admin'); ?>
              </li>
              <li <?php echo ($this->uri->segment(3) === 'adduser') ? 'class="active"' : 'class=""' ?>>
                <?php echo anchor('admin/setting/adduser', 'Tambah User'); ?>
              </li>
               <li <?php echo ($this->uri->segment(3) === 'penerbit') ? 'class="active"' : 'class=""' ?>>
                <?php echo anchor('admin/setting/penerbit', 'Penerbit'); ?>
              </li>
              <li <?php echo ($this->uri->segment(3) === 'jenis_buku') ? 'class="active"' : 'class=""' ?>>
                <?php echo anchor('admin/setting/jenis_buku', 'Jenis Buku'); ?>
              </li>
              <li <?php echo ($this->uri->segment(3) === 'jenis_digital') ? 'class="active"' : 'class=""' ?>>
                <?php echo anchor('admin/setting/jenis_digital', 'Jenis Digital'); ?>
              </li>
              <li <?php echo ($this->uri->segment(3) === 'jenis_dokumen') ? 'class="active"' : 'class=""' ?>>
                <?php echo anchor('admin/setting/jenis_dokumen', 'Jenis Dokumen'); ?>
              </li>
            </ul>
          </li>
          <!-- controller arsip -->
          <li <?php echo ($this->uri->segment(2) === 'arsip') ? 'class="active"' : 'class=""' ?>>
            <a href="#"><i class="fa fa-database"></i> <span class="nav-label">Arsip</span> <span class="fa arrow"></span></a>
            <ul <?php echo ($this->uri->segment(2) === 'arsip') ? 'class="nav nav-second-level collapse in"' : 'class="nav nav-second-level collapse"' ?>>
              <li <?php echo ($this->uri->segment(3) === 'digital') ? 'class="active"' : 'class=""' ?>>
                <?php echo anchor('admin/arsip/digital', 'Digital'); ?>
              </li>
              <li <?php echo ($this->uri->segment(3) === 'dokumen') ? 'class="active"' : 'class=""' ?>>
                <?php echo anchor('admin/arsip/dokumen', 'Dokumen'); ?>
              </li>
              <li <?php echo ($this->uri->segment(3) === 'buku') ? 'class="active"' : 'class=""' ?>>
                <?php echo anchor('admin/arsip/buku', 'Buku'); ?>
              </li>
            </ul>
          </li>
        </ul> <!-- end .nav metismenu -->
      </div> <!-- end .sidebar-collapse -->
    </nav> <!-- end nav .navbar-default navbar-static-side -->