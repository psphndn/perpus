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
                    <h5><span><i class="fa fa-plus-square"> </i></span> Form edit Digital</h5>
                    <div class="ibox-tools">
                    </div>
                  </div>
                  <div class="ibox-content">
                    <div class="form-group">
                      <label>Judul Digital</label>
                      <input name="judul_digital" value="<?php echo $digital->judul_digital ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select name="level_digital" class="form-control" required="">
                          <option value="">-- Pilih --</option>
                          <option value="0">Digital Umum</option>
                          <option value="1">Digital Khusus</option>
                        </select>
                       </div>
                    <div class="form-group">
                       <label>Jenis Digital</label>
                       <select name="jenis_digital" class="form-control" required="">
                        <option value="">-- Pilih --</option>
                        <?php foreach ($jenis_digital as $key) : ?>
                          <option value="<?php echo $key->id_jenis_digital ?>"><?php echo ucwords($key->jenis_digital) ?></option>
                        <?php endforeach; ?>
                       </select>
                    </div>
                    <div class="form-group">
                      <label>Tag Digital</label>
                      <input name="tag_digital" value="<?php echo $digital->tag_digital ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>Pengarang Digital</label>
                      <input name="pengarang_digital" value="<?php echo $digital->pengarang_digital ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>Sampul Digital</label>
                      <input name="sampul_digital" value="<?php echo $digital->sampul_digital ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>Sinopsis Digital</label>
                      <input name="sinopsis_digital" value="<?php echo $digital->sinopsis_digital ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>File Digital</label>
                      <input name="file_digital" value="<?php echo $digital->file_digital ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>penerbit</label>
                      <select name="penerbit" class="form-control" required="">
                        <option value="<?php echo $digital->id_penerbit ?>"><?php echo ucwords($digital->penerbit) ?></option>
                        <?php foreach ($penerbit as $key) : ?>
                          <option value="<?php echo $key->id_penerbit ?>"><?php echo ucwords($key->penerbit) ?></option>
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
                      <h5><span><i class="fa fa-plus-square"> </i></span> Form Tambah digital</h5>
                      <div class="ibox-tools">
                      </div>
                    </div>
                    <div class="ibox-content">
                       <div class="form-group">
                        <label>Judul digital</label>
                        <input name="judul_digital" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>Level</label>
                        <select name="level_digital" class="form-control" required="">
                          <option value="">-- Pilih --</option>
                          <option value="0">Digital Umum</option>
                          <option value="1">Digital Khusus</option>
                        </select>
                       </div>
                       <div class="form-group">
                       <label>Jenis Digital</label>
                       <select name="jenis_digital" class="form-control" required="">
                        <option value="">-- Pilih --</option>
                        <?php foreach ($jenis_digital as $key) : ?>
                          <option value="<?php echo $key->id_jenis_digital ?>"><?php echo ucwords($key->jenis_digital) ?></option>
                        <?php endforeach; ?>
                       </select>
                       </div>
                       <div class="form-group">
                        <label>Tag Digital</label>
                        <input name="tag_digital" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>Pengarang Digital</label>
                        <input name="pengarang_digital" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>Sampul Digital</label>
                        <input name="sampul_digital" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>Sinopsis Digital</label>
                        <input name="sinopsis_digital" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>File Digital</label>
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                          <div class="form-control" data-trigger="fileinput">
                              <i class="glyphicon glyphicon-file fileinput-exists"></i>
                          <span class="fileinput-filename"></span>
                          </div>
                          <span class="input-group-addon btn btn-default btn-file">
                              <span class="fileinput-new">Select file</span>
                              <span class="fileinput-exists">Change</span>
                              <input type="file" name="file_digital"/>
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
                <h5><span><i class="fa fa-list-alt"> </i></span> Daftar Digital</h5>
                <div class="ibox-tools">
                </div>
              </div>
              <div class="ibox-content">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Judul Digital</th>
                        <th>Tag Digital</th>
                        <th>Pengarang Digital</th>
                        <th>Sampul Digital</th>
                        <th>Sinopsis Digital</th>
                        <th>Penerbit</th>
                        <th>Menu</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1 ?>
                      <?php foreach ($listdigital as $key) : ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $key->judul_digital ?></td>
                          <td><?php echo $key->tag_digital ?></td>
                          <td><?php echo $key->pengarang_digital ?></td>
                          <td><?php echo $key->sampul_digital ?></td>
                          <td><?php echo $key->sinopsis_digital ?></td>
                          <td><?php echo $key->id_penerbit ?></td>
                          <td>
                            <a href="<?php echo base_url('admin/arsip/digital/'.$key->id_digital) ?>" class="btn btn-xs btn-danger"><i class="fa fa-edit "></i> Edit</a>
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