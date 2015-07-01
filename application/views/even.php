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
		<a href="<?php echo base_url()."index.php/even/daftareven";  ?>">Data Even</a>
		</p>
	</div>
</div>

<form method='post' action=''>
<div id="content-profil-kanan">
		<div class="isi-text">
						<table width="100%" border="0" cellpadding="3" cellspacing="11" bgcolor="#CCCCCC">
								<tr>
									<td>Nama Event <font class="small_1">Lengkap</font> <font color="#FF0000">*</font></td>
									<td>:</td>
									<td><input name="namaeventsingkat" type="text"  size="50" maxlength="70">
									<font class="small_1">maks: 70</font></td>
								</tr>
								<tr>
								<td>Waktu Mulai <font color="#FF0000">*</font><br> </td>
								<td>:</td>
								<td>
								<select name="tanggal">
									<option></option>
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
									<option>06</option>
									<option>07</option>
									<option>08</option>
									<option>09</option>
									<option>10</option>
									<option>11</option>
									<option>12</option>
									<option>13</option>
									<option>14</option>
									<option>15</option>
									<option>16</option>
									<option>17</option>
									<option>18</option>
									<option>19</option>
									<option>20</option>
									<option>21</option>
									<option>22</option>
									<option>23</option>
									<option>24</option>
									<option>25</option>
									<option>26</option>
									<option>27</option>
									<option>28</option>
									<option>29</option>
									<option>30</option>
									<option>31</option>
								</select>

			<select name="bulanm">
									<option></option>
									<option value="01">Januari</option>
									<option value="02">Februari</option>
									<option value="03">Maret</option>
									<option value="04">April</option>
									<option value="05">Mei</option>
									<option value="06">Juni</option>
									<option value="07">Juli</option>
									<option value="08">Agustus</option>
									<option value="09">September</option>
									<option value="10">Oktober</option>
									<option value="11">November</option>
									<option value="12">Desember</option>
							</select>
			<select name="tahunm">
									<option></option>
									<option>2007</option>
									<option>2008</option>
									<option>2009</option>
									<option>2010</option>
									<option>2011</option>
									<option>2012</option>
									<option>2013</option>
									<option>2014</option>
									<option>2015</option>
							</select>
			Jam:
			<select name="jamm" id="jamm">
								<option></option>
								<option>00</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
							</select>
			:
			<select name="mntm" id="mntm">
								<option></option>
									<option>00</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
								<option>31</option>
								<option>32</option>
								<option>33</option>
								<option>34</option>
								<option>35</option>
								<option>36</option>
								<option>37</option>
								<option>38</option>
								<option>39</option>
								<option>40</option>
								<option>41</option>
								<option>42</option>
								<option>43</option>
								<option>44</option>
								<option>45</option>
								<option>46</option>
								<option>47</option>
								<option>48</option>
								<option>49</option>
								<option>50</option>
								<option>51</option>
								<option>52</option>
								<option>53</option>
								<option>54</option>
								<option>55</option>
								<option>56</option>
								<option>57</option>
								<option>58</option>
								<option>59</option>
							</select>
			WIB</td>
							</tr><tr>
								<td>Waktu Selesai <font color="#FF0000">*</font><br> </td>
								<td>:</td>
								<td>
								<select name="tglm">
									<option></option>
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
									<option>06</option>
									<option>07</option>
									<option>08</option>
									<option>09</option>
									<option>10</option>
									<option>11</option>
									<option>12</option>
									<option>13</option>
									<option>14</option>
									<option>15</option>
									<option>16</option>
									<option>17</option>
									<option>18</option>
									<option>19</option>
									<option>20</option>
									<option>21</option>
									<option>22</option>
									<option>23</option>
									<option>24</option>
									<option>25</option>
									<option>26</option>
									<option>27</option>
									<option>28</option>
									<option>29</option>
									<option>30</option>
									<option>31</option>
								</select>

			<select name="bulanm">
									<option></option>
									<option value="01">Januari</option>
									<option value="02">Februari</option>
									<option value="03">Maret</option>
									<option value="04">April</option>
									<option value="05">Mei</option>
									<option value="06">Juni</option>
									<option value="07">Juli</option>
									<option value="08">Agustus</option>
									<option value="09">September</option>
									<option value="10">Oktober</option>
									<option value="11">November</option>
									<option value="12">Desember</option>
							</select>
			<select name="tahunm">
									<option></option>
									<option>2007</option>
									<option>2008</option>
									<option>2009</option>
									<option>2010</option>
									<option>2011</option>
									<option>2012</option>
									<option>2013</option>
									<option>2014</option>
									<option>2015</option>
							</select>
			Jam:
			<select name="jamm" id="jamm">
								<option></option>
								<option>00</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
							</select>
			:
			<select name="mntm" id="mntm">
								<option></option>
									<option>00</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
								<option>31</option>
								<option>32</option>
								<option>33</option>
								<option>34</option>
								<option>35</option>
								<option>36</option>
								<option>37</option>
								<option>38</option>
								<option>39</option>
								<option>40</option>
								<option>41</option>
								<option>42</option>
								<option>43</option>
								<option>44</option>
								<option>45</option>
								<option>46</option>
								<option>47</option>
								<option>48</option>
								<option>49</option>
								<option>50</option>
								<option>51</option>
								<option>52</option>
								<option>53</option>
								<option>54</option>
								<option>55</option>
								<option>56</option>
								<option>57</option>
								<option>58</option>
								<option>59</option>
							</select>
			WIB</td>
							</tr>
							<tr>
								<td valign="top">Alamat <font color="#FF0000">*</font><br />
								<font class="small_1">Daerah Provinsi. </font></td>
								<td valign="top">:</td>
								<td><input name="tempat" type="text" id="tempat" size="34" />
									<select name="kota">
										<option></option>
										<option>yogyakarta</option>
									</select>
								</td>

							</tr>

							<tr>
								<td valign="top">Cuplikan Event <font color="#FF0000">*</font><br />
								<font class="small_1">Tuliskan deskripsi singkat tentang event yang Anda kirim. </font></td>
								<td valign="top">:</td>
								<td><textarea name="cuplikan" cols="50" rows="5" id="cuplikan" ></textarea></td>
							</tr>

							<tr>
								<td valign="top">Detail Event<font color="#FF0000"> *</font><br /><br />
								<font class="small_1">Di kolom ini Anda bisa menjelaskan secara rinci tentang event yang Anda kirim. Seperti: Waktu acara, teknis pelaksanaan, tempat, rincian acara, run down, contact person, dll.</font>                  </td>
								<td valign="top">:</td>
								<td><textarea name="detail" cols="50" rows="20" id="detail"></textarea></td>
							</tr>
							<tr>
								<td valign="top">Gambar Event</td>
								<td valign="top">:</td>
								<td valign="top"><input type="file" name="gambar" /><font class="small_1"><em>(boleh kosong)<br />
								Format file harus JPEG.</em></font></td>
							</tr>
							<tr>
								<td valign="top">Lokasi Map<font color="#FF0000"> *</font></td>
								<td valign="top">:</td>
								<td valign="top"><input name="katakunci" type="text" id="katakunci" size="44" />
									<input name="katakunci" type="button" id="katakunci" value="Google Map" onclick=<?php echo base_url(); ?> />
								<br />
								<font class="small_1">Masukan kordinat dari lokasi acara even yang iangin di selengarakan.<br />
								Contoh: -7.8032504,110.374845,13z .</em></font></td>
							</tr>
							<tr>
                  <td colspan="3"><p> <br>
                      <input name="send" value="ok" type="hidden">
                      <input name="Submit" value="Kirim" type="submit">
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

</from>
</body>
</div>
</fieldset>
</html>
