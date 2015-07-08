<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Even</title>
<style type="text/css">

    h1 {
      color: #444;
      background-color: transparent;
      border-bottom: 1px solid #D0D0D0;
      font-size: 19px;
      font-weight: normal;
      margin: 0 0 14px 0;
      padding: 20px 15px 10px 15px;
    }
    #main {
    background-repeat: repeat-y;
    position: relative;
    float: left;
    width:100%;
    }
    #content-profil-kiri {
    left: 5px;
    margin: 5px 5px 5px 5px;
    position: relative;

    text-align: left;
    }
</style>
</head>



<body>
<fieldset>
<legend>Selamat Data Di Event</legend>
<div id="main">
<div id="content-profil-kiri">
  <H1>Data Acara Event!</H1>
<div class="isi-text">

  <table border="1" style="border-collapse:collapse; width:80%;">
    <tr style="background:gray;">
      <th>No</th>
      <th>Nama Even</th>
      <th>Tanggal Mulai</th>
      <th>Jam Mulai</th>
      <th>Tanggal Selesai</th>
      <th>Jam Selesai</th>
      <th>Alamat</th>
      <th>Provinsi</th>
      <th>Deskrepsi</th>
      <th>Detail Even</th>
      <th>Gambar</th>
      <th>Lokasi Map</th>
      <th>action</th>
      <?php
    $no=1;
      foreach ($result->result() as $d)
    {
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
            <td><?php echo $d->nama_even; ?></td>
            <td><?php echo $d->tgl_mulai; ?></td>
            <td><?php echo $d->jam_mulai;?> </td>
            <td><?php echo $d->tgl_selesai; ?></td>
            <td><?php echo $d->jam_selesai;?></td>
            <td><?php echo $d->alamat;?> </td>
            <td><?php echo $d->provinsi; ?></td>
            <td><?php echo $d->deskrepsi;?></td>
            <td><?php echo $d->detail_even;?> </td>
            <td><?php echo $d->gambar; ?></td>
            <td><?php echo $d->lokasi_map;?></td>
        <td><a href="<?php echo base_url('even/edit_db/'.$d->id) ?>" style="text-decoration:none"><input type="button" value="Edit"/></a> |
            <a href="<?php echo base_url('even/hapus_db/'.$d->id) ?>"
            onclick="return confirm('apakah anda yakin')"style="text-decoration:none"><input type="button" value="Delet"/></a></td>
    </tr>
    <?php
      } ?>
  </table>
  <a href="<?php echo base_url();  ?>">Home</a>
</div>
</div>
</form>
</body>
</div>
</fieldset>
