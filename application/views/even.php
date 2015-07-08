<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Selamat Datang Di Even</title>
	<style type="text/css">
	body {
	  background-color: #fff;
	  font: 13px/20px normal Helvetica, Arial, sans-serif;
	  color: #4F5155;
	  display: block;
	  padding: 50px 150px 10px 150px;
	}
	h1 {
	  color: #444;
	  background-color: transparent;
	  border-bottom: 1px solid #D0D0D0;
	  font-size: 19px;
	  font-weight: normal;
	  margin: 0 0 14px 0;
	  padding: 20px 15px 10px 15px;
	}
	code {
	  font-family: Consolas, Monaco, Courier New, Courier, monospace;
	  font-size: 15px;
	  background-color: #f9f9f9;
	  border: 1px solid #D0D0D0;
	  color: #002166;
	  display: block;
	  margin: 5px 0 14px 0;
	  padding: 5px 10px 5px 10px;
	}
	  #body {
	    margin: 0 15px 0 15px;
	  }
	p.footer {
	  text-align: right;
	  font-size: 11px;
	  border-top: 1px solid #D0D0D0;
	  line-height: 32px;
	  padding: 0 10px 0 10px;
	  margin: 20px 0 0 0;
	}
	#container {
	  margin: 20px 200px 200px 200px;
	  border: 1px solid #D0D0D0;
	  box-shadow: 0 0 8px #D0D0D0;
	}
	#main {
	background-image: url(images/bg_content.png);
	background-repeat: repeat-y;
	position: relative;
	float: left;
	width:1000px;
	}
	#content-profil-kiri {
	width: 300px;
	left: 10px;
	position: relative;
	float: left;
	text-align: left;
	}

	#content-profil-kanan {
	width: 650px;
	margin:  20px 0 0 30px;
	right: 5px;
	position: relative;
	float: right;
	}
	.isi-text{
	text-align: justify;
	color: #333333;

	}
	.small_1
	 {
	  COLOR: #666666; FONT-SIZE: 7pt;
	}

	.small_2
	 {
	  COLOR: #666666; FONT-SIZE: 8pt;
	}
</style>
</head>



<body>
	<fieldset>
	<legend>Selamat Data Di Event</legend>
<div id="main">
<div id="content-profil-kiri"><H1>Kirim Event!</H1>
<div class="isi-text">
		<B>Berbagi Informasi Tentang Event di Seluruh Kota Indonesia</B>
			<p align="justify">
								Anda dapat mengirimkan info agenda event yang akan berlangsung di sini, baik berupa event kota, komunitas, sekolah, kampus, bisnis, budaya, musik, dll. Informasi yang Anda kirimkan akan  dibagikan kepada sesama melalui
								situs ini dan di social media. </p>
			<p align="justify">Ayo berbagi agar semakin banyak orang mengenal dan mengunjungi <strong>Kota Seluruh Indonesia</strong> yang kita cintai</p>
			<p align="justify">Apabila informasi tersebut merupakan kutipan dari media tertentu, mohon untuk mencantumkan sumbernya dengan jelas. <br>
			<p align="justify">Informasi Even ini akan di lengkapi dengan fitur Map yang terhubung langsung dari <strong>Google Map</strong> yang nantinya akan memberikan lokasi
								dengan sumber terpercaya dan cepat.</p>
		<br><br>
		<a href="<?php echo base_url('/even/daftareven');  ?>">Data Even</a>
		</p>
	</div>
</div>

<div id="content-profil-kanan">
		<div class="isi-text">
			<form method="post" action="<?php echo base_url('index.php/even/insert') ?>">
						<table width="100%" border="0" cellpadding="3" cellspacing="11" bgcolor="#CCCCCC">
								<tr>
									<td>Nama Event <font class="small_1">Lengkap</font> <font color="#FF0000">*</font></td>
									<td>:</td>
									<td><input name="nama_even" placeholder="Masukan Nama" type="text"  size="50" maxlength="70">
									<font class="small_1">maks: 70</font></td>
								</tr>
								<tr>
								<td>Waktu Mulai <font color="#FF0000">*</font><br> </td>
								<td>:</td>
								<td >
									<select name="tanggal">
	                    <option></option>
											<option value="<?php echo "01";?>">01</option>
											<option value="<?php echo "02";?>">02</option>
											<option value="<?php echo "03";?>">03</option>
											<option value="<?php echo "04";?>">04</option>
											<option value="<?php echo "05";?>">05</option>
											<option value="<?php echo "06";?>">06</option>
											<option value="<?php echo "07";?>">07</option>
											<option value="<?php echo "08";?>">08</option>
											<option value="<?php echo "09";?>">09</option>
											<option value="<?php echo "10";?>">10</option>
											<option value="<?php echo "11";?>">11</option>
											<option value="<?php echo "12";?>">12</option>
											<option value="<?php echo "13";?>">13</option>
											<option value="<?php echo "14";?>">14</option>
											<option value="<?php echo "15";?>">15</option>
											<option value="<?php echo "16";?>">16</option>
											<option value="<?php echo "17";?>">17</option>
											<option value="<?php echo "18";?>">18</option>
											<option value="<?php echo "19";?>">19</option>
											<option value="<?php echo "20";?>">20</option>
											<option value="<?php echo "21";?>">21</option>
											<option value="<?php echo "22";?>">22</option>
											<option value="<?php echo "23";?>">23</option>
											<option value="<?php echo "24";?>">24</option>
											<option value="<?php echo "25";?>">25</option>
											<option value="<?php echo "26";?>">26</option>
											<option value="<?php echo "27";?>">27</option>
											<option value="<?php echo "28";?>">28</option>
											<option value="<?php echo "29";?>">29</option>
											<option value="<?php echo "30";?>">30</option>
											<option value="<?php echo "31";?>">31</option>
									</select>
	                <select name="bulan">
																	<option></option>
																	<option value="<?php echo "Januari";?>">Januari</option>
																	<option value="<?php echo "Ferbuari";?>">Februari</option>
																	<option value="<?php echo "Maret";?>">Maret</option>
																	<option value="<?php echo "April";?>">April</option>
																	<option value="<?php echo "Mei";?>">Mei</option>
																	<option value="<?php echo "Juni";?>">Juni</option>
																	<option value="<?php echo "Juli";?>">Juli</option>
																	<option value="<?php echo "Agustus";?>">Agustus</option>
																	<option value="<?php echo "September";?>">September</option>
																	<option value="<?php echo "Oktober";?>">Oktober</option>
																	<option value="<?php echo "November";?>">November</option>
																	<option value="<?php echo "Desember";?>">Desember</option>
	                </select>
	                <select name="tahun">
											<option></option>
											<option value="<?php echo "2015";?>">2015</option>
											<option value="<?php echo "2016";?>">2016</option>
											<option value="<?php echo "2017";?>">2017</option>
											<option value="<?php echo "2018";?>">2018</option>
											<option value="<?php echo "2019";?>">2019</option>
											<option value="<?php echo "2020";?>">2020</option>
	                </select>
			Jam:
			<select name="jam">
									<option></option>
									<option value="<?php echo "00";?>">00</option>
									<option value="<?php echo "01";?>">01</option>
									<option value="<?php echo "02";?>">02</option>
									<option value="<?php echo "03";?>">03</option>
									<option value="<?php echo "04";?>">04</option>
									<option value="<?php echo "05";?>">05</option>
									<option value="<?php echo "06";?>">06</option>
									<option value="<?php echo "07";?>">07</option>
									<option value="<?php echo "08";?>">08</option>
									<option value="<?php echo "09";?>">09</option>
									<option value="<?php echo "10";?>">10</option>
									<option value="<?php echo "11";?>">11</option>
									<option value="<?php echo "12";?>">12</option>
									<option value="<?php echo "13";?>">13</option>
									<option value="<?php echo "14";?>">14</option>
									<option value="<?php echo "15";?>">15</option>
									<option value="<?php echo "16";?>">16</option>
									<option value="<?php echo "17";?>">17</option>
									<option value="<?php echo "18";?>">18</option>
									<option value="<?php echo "19";?>">19</option>
									<option value="<?php echo "20";?>">20</option>
									<option value="<?php echo "21";?>">21</option>
									<option value="<?php echo "22";?>">22</option>
									<option value="<?php echo "23";?>">23</option>
							</select>
			:
			<select name="menit">
										<option></option>
										<option value="<?php echo "00";?>">00</option>
										<option value="<?php echo "01";?>">01</option>
										<option value="<?php echo "02";?>">02</option>
										<option value="<?php echo "03";?>">03</option>
										<option value="<?php echo "04";?>">04</option>
										<option value="<?php echo "05";?>">05</option>
										<option value="<?php echo "06";?>">06</option>
										<option value="<?php echo "07";?>">07</option>
										<option value="<?php echo "08";?>">08</option>
										<option value="<?php echo "09";?>">09</option>
										<option value="<?php echo "10";?>">10</option>
										<option value="<?php echo "11";?>">11</option>
										<option value="<?php echo "12";?>">12</option>
										<option value="<?php echo "13";?>">13</option>
										<option value="<?php echo "14";?>">14</option>
										<option value="<?php echo "15";?>">15</option>
										<option value="<?php echo "16";?>">16</option>
										<option value="<?php echo "17";?>">17</option>
										<option value="<?php echo "18";?>">18</option>
										<option value="<?php echo "19";?>">19</option>
										<option value="<?php echo "20";?>">20</option>
										<option value="<?php echo "21";?>">21</option>
										<option value="<?php echo "22";?>">22</option>
										<option value="<?php echo "23";?>">23</option>
										<option value="<?php echo "24";?>">24</option>
										<option value="<?php echo "25";?>">25</option>
										<option value="<?php echo "26";?>">26</option>
										<option value="<?php echo "27";?>">27</option>
										<option value="<?php echo "28";?>">28</option>
										<option value="<?php echo "29";?>">29</option>
										<option value="<?php echo "30";?>">30</option>
										<option value="<?php echo "31";?>">31</option>
										<option value="<?php echo "32";?>">32</option>
										<option value="<?php echo "33";?>">33</option>
										<option value="<?php echo "34";?>">34</option>
										<option value="<?php echo "35";?>">35</option>
										<option value="<?php echo "36";?>">36</option>
										<option value="<?php echo "37";?>">37</option>
										<option value="<?php echo "38";?>">38</option>
										<option value="<?php echo "39";?>">39</option>
										<option value="<?php echo "40";?>">40</option>
										<option value="<?php echo "41";?>">41</option>
										<option value="<?php echo "42";?>">42</option>
										<option value="<?php echo "43";?>">43</option>
										<option value="<?php echo "44";?>">44</option>
										<option value="<?php echo "45";?>">45</option>
										<option value="<?php echo "46";?>">46</option>
										<option value="<?php echo "47";?>">47</option>
										<option value="<?php echo "48";?>">48</option>
										<option value="<?php echo "49";?>">49</option>
										<option value="<?php echo "50";?>">50</option>
										<option value="<?php echo "51";?>">51</option>
										<option value="<?php echo "52";?>">52</option>
										<option value="<?php echo "53";?>">53</option>
										<option value="<?php echo "54";?>">54</option>
										<option value="<?php echo "55";?>">55</option>
										<option value="<?php echo "56";?>">56</option>
										<option value="<?php echo "57";?>">57</option>
										<option value="<?php echo "58";?>">58</option>
										<option value="<?php echo "59";?>">59</option>
			</select>
			WIB</td>
							</tr><tr>
								<td>Waktu Selesai <font color="#FF0000">*</font><br> </td>
								<td>:</td>
								<td><select name="tanggal_selesai">
										<option></option>
										<option value="<?php echo "01";?>">01</option>
										<option value="<?php echo "02";?>">02</option>
										<option value="<?php echo "03";?>">03</option>
										<option value="<?php echo "04";?>">04</option>
										<option value="<?php echo "05";?>">05</option>
										<option value="<?php echo "06";?>">06</option>
										<option value="<?php echo "07";?>">07</option>
										<option value="<?php echo "08";?>">08</option>
										<option value="<?php echo "09";?>">09</option>
										<option value="<?php echo "10";?>">10</option>
										<option value="<?php echo "11";?>">11</option>
										<option value="<?php echo "12";?>">12</option>
										<option value="<?php echo "13";?>">13</option>
										<option value="<?php echo "14";?>">14</option>
										<option value="<?php echo "15";?>">15</option>
										<option value="<?php echo "16";?>">16</option>
										<option value="<?php echo "17";?>">17</option>
										<option value="<?php echo "18";?>">18</option>
										<option value="<?php echo "19";?>">19</option>
										<option value="<?php echo "20";?>">20</option>
										<option value="<?php echo "21";?>">21</option>
										<option value="<?php echo "22";?>">22</option>
										<option value="<?php echo "23";?>">23</option>
										<option value="<?php echo "24";?>">24</option>
										<option value="<?php echo "25";?>">25</option>
										<option value="<?php echo "26";?>">26</option>
										<option value="<?php echo "27";?>">27</option>
										<option value="<?php echo "28";?>">28</option>
										<option value="<?php echo "29";?>">29</option>
										<option value="<?php echo "30";?>">30</option>
										<option value="<?php echo "31";?>">31</option>
								</select>
								<select name="bulan_selesai">
																<option></option>
																<option value="<?php echo "januari";?>">Januari</option>
																<option value="<?php echo "Ferbuari";?>">Februari</option>
																<option value="<?php echo "Maret";?>">Maret</option>
																<option value="<?php echo "April";?>">April</option>
																<option value="<?php echo "Mei";?>">Mei</option>
																<option value="<?php echo "Juni";?>">Juni</option>
																<option value="<?php echo "Juli";?>">Juli</option>
																<option value="<?php echo "Agustus";?>">Agustus</option>
																<option value="<?php echo "September";?>">September</option>
																<option value="<?php echo "Oktober";?>">Oktober</option>
																<option value="<?php echo "November";?>">November</option>
																<option value="<?php echo "Desember";?>">Desember</option>
								</select>
								<select name="tahun_selesai">
										<option></option>
										<option value="<?php echo "2015";?>">2015</option>
										<option value="<?php echo "2016";?>">2016</option>
										<option value="<?php echo "2017";?>">2017</option>
										<option value="<?php echo "2018";?>">2018</option>
										<option value="<?php echo "2019";?>">2019</option>
										<option value="<?php echo "2020";?>">2020</option>
								</select>
			Jam:
			<select name="jam_selesai">
									<option></option>
									<option value="<?php echo "00";?>">00</option>
									<option value="<?php echo "01";?>">01</option>
									<option value="<?php echo "02";?>">02</option>
									<option value="<?php echo "03";?>">03</option>
									<option value="<?php echo "04";?>">04</option>
									<option value="<?php echo "05";?>">05</option>
									<option value="<?php echo "06";?>">06</option>
									<option value="<?php echo "07";?>">07</option>
									<option value="<?php echo "08";?>">08</option>
									<option value="<?php echo "09";?>">09</option>
									<option value="<?php echo "10";?>">10</option>
									<option value="<?php echo "11";?>">11</option>
									<option value="<?php echo "12";?>">12</option>
									<option value="<?php echo "13";?>">13</option>
									<option value="<?php echo "14";?>">14</option>
									<option value="<?php echo "15";?>">15</option>
									<option value="<?php echo "16";?>">16</option>
									<option value="<?php echo "17";?>">17</option>
									<option value="<?php echo "18";?>">18</option>
									<option value="<?php echo "19";?>">19</option>
									<option value="<?php echo "20";?>">20</option>
									<option value="<?php echo "21";?>">21</option>
									<option value="<?php echo "22";?>">22</option>
									<option value="<?php echo "23";?>">23</option>
							</select>
			:
			<select name="menit_selesai">
										<option></option>
										<option value="<?php echo "00";?>">00</option>
										<option value="<?php echo "01";?>">01</option>
										<option value="<?php echo "02";?>">02</option>
										<option value="<?php echo "03";?>">03</option>
										<option value="<?php echo "04";?>">04</option>
										<option value="<?php echo "05";?>">05</option>
										<option value="<?php echo "06";?>">06</option>
										<option value="<?php echo "07";?>">07</option>
										<option value="<?php echo "08";?>">08</option>
										<option value="<?php echo "09";?>">09</option>
										<option value="<?php echo "10";?>">10</option>
										<option value="<?php echo "11";?>">11</option>
										<option value="<?php echo "12";?>">12</option>
										<option value="<?php echo "13";?>">13</option>
										<option value="<?php echo "14";?>">14</option>
										<option value="<?php echo "15";?>">15</option>
										<option value="<?php echo "16";?>">16</option>
										<option value="<?php echo "17";?>">17</option>
										<option value="<?php echo "18";?>">18</option>
										<option value="<?php echo "19";?>">19</option>
										<option value="<?php echo "20";?>">20</option>
										<option value="<?php echo "21";?>">21</option>
										<option value="<?php echo "22";?>">22</option>
										<option value="<?php echo "23";?>">23</option>
										<option value="<?php echo "24";?>">24</option>
										<option value="<?php echo "25";?>">25</option>
										<option value="<?php echo "26";?>">26</option>
										<option value="<?php echo "27";?>">27</option>
										<option value="<?php echo "28";?>">28</option>
										<option value="<?php echo "29";?>">29</option>
										<option value="<?php echo "30";?>">30</option>
										<option value="<?php echo "31";?>">31</option>
										<option value="<?php echo "32";?>">32</option>
										<option value="<?php echo "33";?>">33</option>
										<option value="<?php echo "34";?>">34</option>
										<option value="<?php echo "35";?>">35</option>
										<option value="<?php echo "36";?>">36</option>
										<option value="<?php echo "37";?>">37</option>
										<option value="<?php echo "38";?>">38</option>
										<option value="<?php echo "39";?>">39</option>
										<option value="<?php echo "40";?>">40</option>
										<option value="<?php echo "41";?>">41</option>
										<option value="<?php echo "42";?>">42</option>
										<option value="<?php echo "43";?>">43</option>
										<option value="<?php echo "44";?>">44</option>
										<option value="<?php echo "45";?>">45</option>
										<option value="<?php echo "46";?>">46</option>
										<option value="<?php echo "47";?>">47</option>
										<option value="<?php echo "48";?>">48</option>
										<option value="<?php echo "49";?>">49</option>
										<option value="<?php echo "50";?>">50</option>
										<option value="<?php echo "51";?>">51</option>
										<option value="<?php echo "52";?>">52</option>
										<option value="<?php echo "53";?>">53</option>
										<option value="<?php echo "54";?>">54</option>
										<option value="<?php echo "55";?>">55</option>
										<option value="<?php echo "56";?>">56</option>
										<option value="<?php echo "57";?>">57</option>
										<option value="<?php echo "58";?>">58</option>
										<option value="<?php echo "59";?>">59</option>
			</select>
			WIB</td>
							</tr>
							<tr>
								<td valign="top">Alamat <font color="#FF0000">*</font><br />
								<font class="small_1">Daerah Provinsi. </font></td>
								<td valign="top">:</td>
								<td><input name="alamat" type="text" size="34" />
									<select name="provinsi">
										<option></option>
										<option value="<?php echo "Aceh"; 							?>">Aceh</option>
										<option value="<?php echo "Sumatera Utara"; 		?>">Sumatera Utara</option>
										<option value="<?php echo "Sumatera Barat"; 		?>">Sumatera Barat</option>
										<option value="<?php echo "Riau"; 							?>">Riau</option>
										<option value="<?php echo "Kepulauan Riau"; 		?>">Kepulauan Riau</option>
										<option value="<?php echo "Jambi"; 							?>">Jambi</option>
										<option value="<?php echo "Sumatra Selatan";		?>">Sumatra Selatan</option>
										<option value="<?php echo "Bangka Belitung"; 		?>">Bangka Belitung</option>
										<option value="<?php echo "Bengkulu"; 					?>">Bengkulu</option>
										<option value="<?php echo "Lampung"; 						?>">Lampung</option>
										<option value="<?php echo "Jakarta"; 						?>">Jakarta</option>
										<option value="<?php echo "Jawa Barat"; 				?>">Jawa Barat</option>
										<option value="<?php echo "Banten"; 						?>">Banten</option>
										<option value="<?php echo "Jawa Tengah"; 				?>">Jawa Tengah</option>
										<option value="<?php echo "DI Yogyakarta"; 			?>">DI Yogyakarta</option>
										<option value="<?php echo "Jawa Timur"; 				?>">Jawa Timur</option>
										<option value="<?php echo "Bali"; 							?>">Bali</option>
										<option value="<?php echo "NTB"; 								?>">NTB</option>
										<option value="<?php echo "NTT"; 								?>">NTT</option>
										<option value="<?php echo "Kalimantan Barat"; 	?>">Kalimantan Barat</option>
										<option value="<?php echo "Kalimantan Tengah";	?>">Kalimantan Tengah</option>
										<option value="<?php echo "Kalimantan Selatan"; ?>">Kalimantan Selatan</option>
										<option value="<?php echo "Kalimantan Timur"; 	?>">Kalimantan Timur</option>
										<option value="<?php echo "Kalimantan Utara"; 	?>">Kalimantan Utara</option>
										<option value="<?php echo "Sulawesi Utara"; 		?>">Sulawesi Utara</option>
										<option value="<?php echo "Sulawesi Barat"; 		?>">Sulawesi Barat</option>
										<option value="<?php echo "Sulawesi Tengah"; 		?>">Sulawesi Tengah</option>
										<option value="<?php echo "Sulawesi Tenggara"; 	?>">Sulawesi Tenggara</option>
										<option value="<?php echo "Sulawesi Selatan"; 	?>">Sulawesi Selatan</option>
										<option value="<?php echo "Gorontalo"; 					?>">Gorontalo </option>
										<option value="<?php echo "Maluku"; 						?>">Maluku </option>
										<option value="<?php echo "Papua Barat"; 				?>">Papua Barat</option>
										<option value="<?php echo "Jayapura"; 					?>">Jayapura</option>
									</select>
								</td>
							</tr>
							<tr>
								<td valign="top">Cuplikan Event <font color="#FF0000">*</font><br />
								<font class="small_1">Tuliskan deskripsi singkat tentang event yang Anda kirim. </font></td>
								<td valign="top">:</td>
								<td><textarea name="deskrepsi" cols="50" rows="5" ></textarea></td>
							</tr>

							<tr>
								<td valign="top">Detail Event<font color="#FF0000"> *</font><br /><br />
								<font class="small_1">Di kolom ini Anda bisa menjelaskan secara rinci tentang event yang Anda kirim. Seperti: Waktu acara, teknis pelaksanaan, tempat, rincian acara, run down, contact person, dll.</font>                  </td>
								<td valign="top">:</td>
								<td><textarea name="detail_even" cols="50" rows="20"></textarea></td>
							</tr>
							<tr>
								<td valign="top">Gambar Event</td>
								<td valign="top">:</td>
								<td valign="top"><input type="file" name="gambar" />
									<font class="small_1"><em>(boleh kosong)<br />
								Format file harus JPEG.</em></font></td>
							</tr>
							<tr>
								<td valign="top">Lokasi Map<font color="#FF0000"> *</font></td>
								<td valign="top">:</td>
								<td valign="top">
									<input name="lokasi_map" type="text" size="44"></input>
									<a href="https://www.google.co.id/maps" style="text-decoration:none" base target='_blank' >
									<input type="button" value="Google Map" onclick="return confirm('Menuju Google Maps')"></input></a>
								<br />
								<font class="small_1">Masukan kordinat dari lokasi acara even yang iangin di selengarakan.<br />
								Contoh: -7.8032504,110.374845,13z .</em></font></td>
							</tr>
							<tr>
                  <td colspan="3"><p> <br>
                      <input name="send" value="ok" type="hidden">
                      <input name="Submit" value="Kirim" type="submit" onclick="return confirm('apakah anda yakin')">
                      <input name="ulang" id="ulang" value="Ulang" type="reset">
                      <br>
                      <font color="#FF0000"><br>
                      *</font>) Harus diisi<br>
                    </p></td>
                </tr>
							</table>
						</form>
					</div>
				</div><p><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></p>
</form>
</body>
</div>
</fieldset>
</html>
