<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">id alat bahan</label>
            <div class="col-sm-8">
            <?php echo form_hidden('id',$row->id); ?>
            <?php echo form_input(array('name'=>'id_alat_bahan','value'=>$row->id_alat_bahan,'class'=>'form-control'));?>
            <?php echo form_error('id_alat_bahan');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Alat</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_alat','value'=>$row->nama_alat,'class'=>'form-control'));?>
            <?php echo form_error('nama_alat');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Bahan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_bahan','value'=>$row->nama_bahan,'class'=>'form-control'));?>
            <?php echo form_error('nama_bahan');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Kategori</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'kategori','value'=>$row->kategori,'class'=>'form-control'));?>
            <?php echo form_error('kategori');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Simpan</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"master/kategori_alat_bahan/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
            ?>
            </div>
        </div>
    </form>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $(".select2").select2();
    $('.tutup').click(function(e) {  
        $('#myModal').modal('hide');
    });
});
</script>
