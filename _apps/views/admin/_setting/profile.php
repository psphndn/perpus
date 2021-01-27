<?php $this->load->view('admin/_temp/masterheader', $this->data, FALSE); ?>
<?php $this->load->view('admin/_temp/breadcrumb', $this->data, FALSE); ?>

  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="col-lg-12">

        <?php $this->load->view('admin/_temp/notifikasi', $this->data, FALSE); ?>

        <?php echo form_open('', 'role="form" autocomplete="off"'); ?>
          <div class="modal-dialog" style="width: 55%">
            <div class="modal-content">
              <div class="modal-header">
                <h4><span><i class="fa fa-edit"></i></span> Form Edit Profile Admin</h4>
              </div>
              <div class="modal-body">
                <div class="alert alert-danger alert-dismissable">
                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                  <h1 class="text-center"><i class="fa fa-warning"> </i></h1> 
                  <h4 class="text-center">Jika anda mengganti User Name atau Password, pastikan anda mengingatnya.</h4>
                </div>
                <div class="row">
                  <div class="col-sm-7">
                    <div class="form-group">
                      <label>Nama Admin</label>
                      <input name="nama_user" value="<?php echo $this->session->userdata('nama_user'); ?>" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="form-group">
                      <label>Nomor HP</label>
                      <input name="nomor_hp" value="<?php echo $this->session->userdata('nomor_hp'); ?>" class="form-control" required="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>User Name</label>
                      <input name="user_name" value="<?php echo $this->session->userdata('username'); ?>" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Password</label>
                      <input name="pass" class="form-control" value="<?php echo $this->session->userdata('password'); ?>" required="">
                    </div>
                  </div>
                </div>
              </div> <!-- end .modal-body -->
              <div class="modal-footer">
                <?php echo form_submit('edit', 'Save', 'class="btn btn-sm btn-primary"'); ?>
              </div> <!-- end .modal-footer -->
            </div> <!-- end .modal-content -->
          </div> <!-- end .modal-dialog -->
        <?php echo form_close(); ?>

      </div> <!-- end .col-lg-12 -->
    </div> <!-- end .row -->
  </div> <!-- end .wrapper -->
  
<?php $this->load->view('admin/_temp/masterfooter', $this->data, FALSE); ?>