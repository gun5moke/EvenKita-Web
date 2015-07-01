<html>
<head>
  <title>Daftar Even</title>
</head>
<body>
  <table border="1" style="border-collapse:collapse; width:80%;">
    <tr style="background:gray;">
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
<?php foreach ($data as $d){
  ?>
  <tr>
    <td><?php echo $d['nama_even']; ?></td>
    <td><?php echo $d['tgl_mulai'];?></td>
    <td><?php echo $d['jam_mulai'];?> </td>
    <td><?php echo $d['tgl_selesai']; ?></td>
    <td><?php echo $d['jam_selesai'];?></td>
    <td><?php echo $d['alamat'];?> </td>
    <td><?php echo $d['provinsi']; ?></td>
    <td><?php echo $d['deskrepsi'];?></td>
    <td><?php echo $d['detail_even'];?> </td>
    <td><?php echo $d['gambar']; ?></td>
    <td><?php echo $d['lokasi_map'];?></td>
    <td align="center">
      <a href="">edit</a> ||
      <a href="">hapus</a>
    </td>
  </tr>
  <?php }  ?>
  </table>
  <a href="<?php echo base_url();  ?>">Home</a>
</body>
</html>
