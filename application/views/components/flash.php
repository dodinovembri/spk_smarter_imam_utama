<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-primary alert-dismissable" style="margin-left: 15px; margin-right: 15px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
        <?php 
            echo $this->session->flashdata('success'); 
            $this->session->unset_userdata('success');
        ?>
    </div>
<?php } elseif ($this->session->flashdata('warning')) { ?>
    <div class="alert alert-success alert-dismissable" style="margin-left: 15px; margin-right: 15px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
        <?php 
            echo $this->session->flashdata('warning'); 
            $this->session->unset_userdata('warning');
        ?>
    </div>
<?php } ?>