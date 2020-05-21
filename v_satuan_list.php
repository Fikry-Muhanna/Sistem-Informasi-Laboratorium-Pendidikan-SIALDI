<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="row" id="form_pembelian">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Master Nama Satuan</h3>

            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("master/satuan/form/base","#modal")','Add New Satuan','btn btn-success');
              } else {
                # code...
              }
              ?>
            </div>
          </div>
          <div class="box-body">
            <table width="100%" id="tableku" class="table table-striped">
              <thead>
                <th>id</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Act</th>
              </thead>
              <tbody>
                    <tr>
                        <td align="center" scope="row">1</td>
                        <td align="center">id</td>
                        <td align="center">Nama</td>
                        <td align="center">Keterangan</td>
                        <td align="center" >
                            <button type="button" class="btn btn-danger">Hapus</button>
                            <button type="button" class="btn btn-info">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
  $(document).ready(function() {
    var table = $('#tableku').DataTable( {
      "ordering": false,
    } );
  });
</script> 
