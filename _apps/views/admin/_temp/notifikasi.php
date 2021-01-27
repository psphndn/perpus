        <?php if($this->session->userdata('gagal')): ?>
          <div class="alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <h1 class="text-center"><i class="fa fa-warning"> </i> </h1> 
            <h3 class="text-center"><?php echo $this->session->flashdata('gagal'); ?></h3>
          </div>
        <?php endif; ?>

        <?php if($this->session->userdata('sukses')): ?>
          <div class="alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <h1 class="text-center"><i class="fa fa-thumbs-o-up"> </i> </h1> 
            <h3 class="text-center"><?php echo $this->session->flashdata('sukses'); ?></h3>
          </div>
        <?php endif; ?>