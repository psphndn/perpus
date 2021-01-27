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
                    <h5><span><i class="fa fa-plus-square"> </i></span> Form Edit Buku</h5>
                    <div class="ibox-tools">
                    </div>
                  </div>
                  <div class="ibox-content">
                    <div class="form-group">
                      <label>Judul Buku</label>
                      <input name="judul_buku" value="<?php echo $buku->judul_buku ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select name="level_buku" class="form-control" required="">
                          <option value="">-- Pilih --</option>
                          <option value="0">Buku Umum</option>
                          <option value="1">Buku Khusus</option>
                        </select>
                       </div>
                    <div class="form-group">
                      <label>Tag Buku</label>
                      <input name="tag_buku" value="<?php echo $buku->tag_buku ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>Pengarang Buku</label>
                      <input name="pengarang_buku" value="<?php echo $buku->pengarang_buku ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>Sampul Buku</label>
                      <input name="sampul_buku" value="<?php echo $buku->sampul_buku ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>Sinopsis Buku</label>
                      <input name="sinopsis_buku" value="<?php echo $buku->sinopsis_buku ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>File Buku</label>
                      <input name="file_buku" value="<?php echo $buku->file_buku ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>Penerbit</label>
                      <select name="penerbit" class="form-control" required="">
                        <option value="<?php echo $buku->id_penerbit ?>"><?php echo ucwords($buku->penerbit) ?></option>
                        <?php foreach ($penerbit as $key) : ?>
                          <option value="<?php echo $key->id_penerbit ?>"><?php echo ucwords($key->penerbit) ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Jenis Buku</label>
                      <select name="jenis_buku" class="form-control" required="">
                        <option value="<?php echo $buku1->id_jenis_buku ?>"><?php echo ucwords($buku1->jenis_buku) ?></option>
                        <?php foreach ($jenis_buku as $key) : ?>
                          <option value="<?php echo $key->id_jenis_buku ?>"><?php echo ucwords($key->jenis_buku) ?></option>
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
                <?php echo form_open_multipart('', 'role="form" autocomplete="off"'); ?>
                  <div class="ibox float-e-margins">
                    <div class="ibox-title panel-primary">
                      <h5><span><i class="fa fa-plus-square"> </i></span> Form Tambah Buku</h5>
                      <div class="ibox-tools">
                      </div>
                    </div>
                    <div class="ibox-content">
                       <div class="form-group">
                        <label>Judul Buku</label>
                        <input name="judul_buku" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>Level</label>
                        <select name="level_buku" class="form-control" required="">
                          <option value="">-- Pilih --</option>
                          <option value="0">Buku Umum</option>
                          <option value="1">Buku Khusus</option>
                        </select>
                       </div>
                       <div class="form-group">
                       <label>Jenis Buku</label>
                       <select name="jenis_buku" class="form-control" required="">
                        <option value="">-- Pilih --</option>
                        <?php foreach ($jenis_buku as $key) : ?>
                          <option value="<?php echo $key->id_jenis_buku ?>"><?php echo ucwords($key->jenis_buku) ?></option>
                        <?php endforeach; ?>
                       </select>
                       </div>
                       <div class="form-group">
                        <label>Tag Buku</label>
                        <input name="tag_buku" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>Pengarang Buku</label>
                        <input name="pengarang_buku" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>Sampul Buku</label>
                        <input name="sampul_buku" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>Sinopsis Buku</label>
                        <input name="sinopsis_buku" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>File Buku</label>
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                          <div class="form-control" data-trigger="fileinput">
                              <i class="glyphicon glyphicon-file fileinput-exists"></i>
                          <span class="fileinput-filename"></span>
                          </div>
                          <span class="input-group-addon btn btn-default btn-file">
                              <span class="fileinput-new">Select file</span>
                              <span class="fileinput-exists">Change</span>
                              <input type="file" name="file_buku"/>
                          </span>
                          <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div> 
                       </div>
                       <div class="form-group">
                        <label>Penerbit</label>
                        <select name="penerbit" class="form-control" required="">
                          <option value="">-- Pilih --</option>
                          <?php foreach ($penerbit as $key) : ?>
                            <option value="<?php echo $key->id_penerbit ?>"><?php echo ucwords($key->penerbit) ?></option>
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
                <h5><span><i class="fa fa-list-alt"> </i></span> Daftar Buku</h5>
                <div class="ibox-tools">
                </div>
              </div>
              <div class="ibox-content">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Judul Buku</th>
                        <th>Level Buku</th>
                        <th>Jenis Buku</th>
                        <th>Tag Buku</th>
                        <th>Pengarang Buku</th>
                        <th>Sampul Buku</th>
                        <th>Sinopsis Buku</th>
                        <th>File Buku</th>
                        <th>Penerbit</th>
                        <th>Menu</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1 ?>
                      <?php foreach ($listbuku as $key) : ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $key->judul_buku ?></td>
                          <td><?php echo $key->level_buku ?></td>
                          <td><?php echo $key->id_jenis_buku ?></td>
                          <td><?php echo $key->tag_buku ?></td>
                          <td><?php echo $key->pengarang_buku ?></td>
                          <td><?php echo $key->sampul_buku ?></td>
                          <td><?php echo $key->sinopsis_buku ?></td>
                          <td><?php echo $key->file_buku ?></td>
                          <td><?php echo $key->id_penerbit ?></td>
                          
                          <td>
                            <a href="<?php echo base_url('admin/arsip/buku/'.$key->id_daftar_buku) ?>" class="btn btn-xs btn-danger"><i class="fa fa-edit "></i> Edit</a>
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