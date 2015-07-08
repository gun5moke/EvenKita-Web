<head>
  <title>Daftar Even</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/plugins/morris.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/font-awesome/css/font-awesome.min.css">
</head>


      <body>
        <div id="page-wrapper">
              <div class="container-fluid">

                  <div class="row">
                      <div class="col-lg-12">
                          <h1 class="page-header">
      <legend>Selamat Data Di Event</legend>
        <h1>Data Acara Event!</h1>
        <table border="1" style="border-collapse:0099FF; width:80%;">
          <tr style="background:#0099FF;">
            <th class="text-center">No</th>
            <th class="text-center">Nama Even</th>
            <th class="text-center">Gambar</th>
            <th class="text-center">Detail</th>
            <?php
          $no=1;
            foreach ($result->result() as $d)
          {
          ?>
          <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td align="center"><?php echo $d->nama_even; ?></td>
                  <td align="center"><?php echo $d->gambar; ?></td>
              <td>
                  <div class="text-center">
                      <a href="<?php echo base_url('even/infoeven'); ?>">View Details <i class="fa fa-arrow-circle-right"></i></a>
                  </div></tr>
          <?php
            } ?>
        </table>
        <a href="<?php echo base_url();  ?>">Home</a>
        <script src="<?php echo base_url();?>asset/js/jquery.js"></script>
        <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
      </div>
      </div>
      </form>
      </fieldset>
      </body>
</div>
