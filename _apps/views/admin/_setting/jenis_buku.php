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
                    <h5><span><i class="fa fa-plus-square"> </i></span> Form Edit Jenis Buku</h5>
                    <div class="ibox-tools">
                    </div>
                  </div>
                  <div class="ibox-content">
                    <div class="form-group">
                      <label>Jenis Buku</label>
                      <input name="jenis_buku" value="<?php echo $jenis_buku->jenis_buku ?>" class="form-control" required="">
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
                      <h5><span><i class="fa fa-plus-square"> </i></span> Form Tambah Jenis Buku</h5>
                      <div class="ibox-tools">
                      </div>
                    </div>
                    <div class="ibox-content">
                      <div class="form-group">
                        <label>Jenis Buku</label>
                        <input name="jenis_buku" class="form-control" required="">
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
                <h5><span><i class="fa fa-list-alt"> </i></span> Daftar Jenis Buku</h5>
                <div class="ibox-tools">
                </div>
              </div>
              <div class="ibox-content">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Jenis Buku</th>
                        <th>Menu</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1 ?>
                      <?php foreach ($listjenisbuku as $key) : ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $key->jenis_buku ?></td>
                          <td>
                            <a href="<?php echo base_url('admin/setting/jenis_buku/'.$key->id_jenis_buku) ?>" class="btn btn-xs btn-danger"><i class="fa fa-edit "></i> Edit</a>
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