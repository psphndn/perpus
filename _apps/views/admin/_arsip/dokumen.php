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
                    <h5><span><i class="fa fa-plus-square"> </i></span> Form Edit Dokumen</h5>
                    <div class="ibox-tools">
                    </div>
                  </div>
                  <div class="ibox-content">
                    <div class="form-group">
                      <label>Judul Dokumen</label>
                      <input name="judul_dokumen" value="<?php echo $dokumen->judul_dokumen ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select name="level_dokumen" class="form-control" required="">
                          <option value="">-- Pilih --</option>
                          <option value="0">Dokumen Umum</option>
                          <option value="1">Dokumen Khusus</option>
                        </select>
                       </div>
                    <div class="form-group">
                      <label>Tag Dokumen</label>
                      <input name="tag_dokumen" value="<?php echo $dokumen->tag_dokumen ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>Pengarang Dokumen</label>
                      <input name="pengarang_dokumen" value="<?php echo $dokumen->pengarang_dokumen ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>Sampul Dokumen</label>
                      <input name="sampul_dokumen" value="<?php echo $dokumen->sampul_dokumen ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>Sinopsis Dokumen</label>
                      <input name="sinopsis_dokumen" value="<?php echo $dokumen->sinopsis_dokumen ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>File Dokumen</label>
                      <input name="file_dokumen" value="<?php echo $dokumen->file_dokumen ?>" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label>penerbit</label>
                      <select name="penerbit" class="form-control" required="">
                        <option value="<?php echo $dokumen->id_penerbit ?>"><?php echo ucwords($dokumen->penerbit) ?></option>
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
                      <h5><span><i class="fa fa-plus-square"> </i></span> Form Tambah dokumen</h5>
                      <div class="ibox-tools">
                      </div>
                    </div>
                    <div class="ibox-content">
                       <div class="form-group">
                        <label>Judul dokumen</label>
                        <input name="judul_dokumen" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>Level</label>
                        <select name="level_dokumen" class="form-control" required="">
                          <option value="">-- Pilih --</option>
                          <option value="0">Dokumen Umum</option>
                          <option value="1">Dokumen Khusus</option>
                        </select>
                       </div>
                       <div class="form-group">
                       <label>Jenis Dokumen</label>
                       <select name="jenis_dokumen" class="form-control" required="">
                        <option value="">-- Pilih --</option>
                        <?php foreach ($jenis_dokumen as $key) : ?>
                          <option value="<?php echo $key->id_jenis_dokumen ?>"><?php echo ucwords($key->jenis_dokumen) ?></option>
                        <?php endforeach; ?>
                       </select>
                       </div>
                       <div class="form-group">
                        <label>Tag Dokumen</label>
                        <input name="tag_dokumen" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>Pengarang Dokumen</label>
                        <input name="pengarang_dokumen" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>Sampul Dokumen</label>
                        <input name="sampul_dokumen" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>Sinopsis Dokumen</label>
                        <input name="sinopsis_dokumen" class="form-control" required="">
                       </div>
                       <div class="form-group">
                        <label>File Dokumen</label>
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                          <div class="form-control" data-trigger="fileinput">
                              <i class="glyphicon glyphicon-file fileinput-exists"></i>
                          <span class="fileinput-filename"></span>
                          </div>
                          <span class="input-group-addon btn btn-default btn-file">
                              <span class="fileinput-new">Select file</span>
                              <span class="fileinput-exists">Change</span>
                              <input type="file" name="file_dokumen"/>
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
                <h5><span><i class="fa fa-list-alt"> </i></span> Daftar Dokumen</h5>
                <div class="ibox-tools">
                </div>
              </div>
              <div class="ibox-content">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Judul Dokumen</th>
                        <th>Tag Dokumen</th>
                        <th>Pengarang Dokumen</th>
                        <th>Sampul Dokumen</th>
                        <th>Sinopsis Dokumen</th>
                        <th>Penerbit</th>
                        <th>Menu</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1 ?>
                      <?php foreach ($listdokumen as $key) : ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $key->judul_dokumen ?></td>
                          <td><?php echo $key->tag_dokumen ?></td>
                          <td><?php echo $key->pengarang_dokumen ?></td>
                          <td><?php echo $key->sampul_dokumen ?></td>
                          <td><?php echo $key->sinopsis_dokumen ?></td>
                          <td><?php echo $key->id_penerbit ?></td>
                          <td>
                            <a href="<?php echo base_url('admin/arsip/dokumen/'.$key->id_dokumen) ?>" class="btn btn-xs btn-danger"><i class="fa fa-edit "></i> Edit</a>
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