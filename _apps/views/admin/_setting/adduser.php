<?php $this->load->view('admin/_temp/masterheader', $this->data, FALSE); ?>
<?php $this->load->view('admin/_temp/breadcrumb', $this->data, FALSE); ?>

  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="col-lg-12">

        <?php $this->load->view('admin/_temp/notifikasi', $this->data, FALSE); ?>

        <div class="row">
          <?php if ($this->uri->segment(4)!== NULL) : ?>
            <div class="col-sm-4">
              <?php echo form_open('', 'role="form" autocomplete="off"'); ?>
                <div class="ibox float-e-margins">
                  <div class="ibox-title panel-primary">
                    <h5><span><i class="fa fa-plus-square"> </i></span> Form Edit User</h5>
                    <div class="ibox-tools">
                    </div>
                  </div>
                  <div class="ibox-content">
                    <div class="form-group">
                      <label>Nama User</label>
                      <input name="nama_user" value="<?php echo $user->nama_user ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>No HP</label>
                      <input name="no_hp" value="<?php echo $user->nomor_hp ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>User Name</label>
                      <input name="user_name" value="<?php echo $user->user_name ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input name="password" value="<?php echo $user->backuppass ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>Level</label>
                      <select name="level" class="form-control" required="">
                        <option value="<?php echo $user->id_level ?>"><?php echo ucwords($user->level) ?></option>
                        <?php foreach ($level as $key) : ?>
                          <option value="<?php echo $key->id_level ?>"><?php echo ucwords($key->level) ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <?php echo form_submit('edit', 'Save', 'class="btn btn-sm btn-primary"'); ?>
                    </div>
                  </div>
                </div> <!-- end .ibox -->
              <?php echo form_close(); ?>
            </div> <!-- end .col -->
            <?php else : ?>
              <div class="col-sm-4">
                <?php echo form_open('', 'role="form" autocomplete="off"'); ?>
                  <div class="ibox float-e-margins">
                    <div class="ibox-title panel-primary">
                      <h5><span><i class="fa fa-plus-square"> </i></span> Form Tambah User</h5>
                      <div class="ibox-tools">
                      </div>
                    </div>
                    <div class="ibox-content">
                      <div class="form-group">
                        <label>Nama User</label>
                        <input name="nama_user" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>No HP</label>
                        <input name="no_hp" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>User Name</label>
                        <input name="user_name" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input name="password" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="form-control" required="">
                          <option value="">-- Pilih --</option>
                          <?php foreach ($level as $key) : ?>
                            <option value="<?php echo $key->id_level ?>"><?php echo ucwords($key->level) ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <?php echo form_submit('simpan', 'Save', 'class="btn btn-sm btn-primary"'); ?>
                      </div>
                    </div>
                  </div> <!-- end .ibox -->
                <?php echo form_close(); ?>
              </div> <!-- end .col -->
          <?php endif; ?>
          
          <div class="col-sm-8">
            <div class="ibox float-e-margins">
              <div class="ibox-title panel-warning">
                <h5><span><i class="fa fa-list-alt"> </i></span> Daftar User</h5>
                <div class="ibox-tools">
                </div>
              </div>
              <div class="ibox-content">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama User</th>
                        <th>Level</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Menu</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1 ?>
                      <?php foreach ($listuser as $key) : ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $key->nama_user ?></td>
                          <td><?php echo ucwords($key->level) ?></td>
                          <td><?php echo $key->user_name ?></td>
                          <td><?php echo $key->backuppass ?></td>
                          <td>
                            <a href="<?php echo base_url('admin/setting/adduser/'.$key->id_user) ?>" class="btn btn-xs btn-danger"><i class="fa fa-edit "></i> Edit</a>
                          </td>
                        </tr>
                        <?php $no++ ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div> <!-- end .ibox -->
          </div> <!-- end .col -->
        </div> <!-- end .row -->


      </div> <!-- end .col-lg-12 -->
    </div> <!-- end .row -->
  </div> <!-- end .wrapper -->
  
<?php $this->load->view('admin/_temp/masterfooter', $this->data, FALSE); ?>