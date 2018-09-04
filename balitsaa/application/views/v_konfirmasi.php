<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap.css'); ?>">
	<title>Details Permohonan</title>
</head>
<body>
    <form style="width: 500px";>
		<?php foreach ($detail as $b) :?>
			<div class="form-group">
		    <label>No. Permohonan</label>
		    <input  class="form-control" value="<?= $b->no_permohonan?>" disabled>
		  </div>
			<div class="form-group">
			 <label>NIP</label>
			 <input  class="form-control" id="nip" name="nip" value="<?= $b->nip?>" disabled>
		 </div>
		  <div class="form-group">
		    <label>Nama Peneliti</label>
		    <input  class="form-control" id="nama" name="nama" value="<?= $b->nm_peneliti?>" disabled>
		  </div>
		  <div class="form-group">
		    <label>Kelompok Peneliti</label>
		    <input  class="form-control" id="kelompok" name="kelompok" value="<?= $b->klmpok_peneliti?>" disabled>
		  </div>
		  <div class="form-group">
		    <label>Penanggung Jawab Di Lapangan</label>
		    <input  class="form-control" id="penanggung" name="penanggung" value="<?= $b->penanggung_jawab?>" disabled>
		  </div>
		  <div class="form-group">
		    <label>Sumber Dana</label>
				<input  class="form-control" id="dana" name="dana" value="<?= $b->sumber_dana?>" disabled>
		 		 </select>
		  </div>
		  <div class="form-group">
		    <label>Judul Kegiatan</label>
		    <input  class="form-control" id="judul" name="judul" value="<?= $b->judul_kegiatan?>" disabled >
		  </div>
		  <div class="form-group">
		    <label>Kode Kegiatan</label>
		    <input  class="form-control" id="kode" name="kode" value="<?= $b->kd_kegiatan?>" disabled>
		  </div>
		   <div class="form-group">
		  <label>Waktu Kegiatan Berakhir</label>
			<input  class="form-control" id="waktu_mulai" name="waktu_mulai" value="<?= $b->waktu_mulai?>" disabled>
		  </div>
		  <div class="form-group">
		  <label>Waktu Kegiatan Berakhir</label>
			<input  class="form-control" id="waktu_selesai" name="waktu_selesai" value="<?= $b->waktu_selesai?>" disabled>
		  </div>
		  <div class="form-group">
		    <label>Komoditas</label>
		    <input  class="form-control" id="komoditas" name="komoditas" value="<?= $b->komoditas?>" disabled>
		  </div>
			<div class="form-group">
				<label>Kode Lahan</label>
				<input  class="form-control" id="kd_lahan" name="kd_lahan" value="<?= $b->kd_lahan?>" disabled>
			</div>
		  <div class="form-group">
		    <label>Luas Lahan</label>
		    <input  class="form-control" id="luas" name="luas" value="<?= $b->luas_lahan?>" disabled>
		  </div>
		  <div class="form-group">
		    <label>Lokasi Lahan</label>
		  </div>
		  <div class="form-group">
		    <label>Tanaman Sebelumnya</label>
		    <input  class="form-control" id="tanaman" name="tanaman" value="<?= $b->tanaman_sebelumnya?>" disabled>
		  </div>
			<div class="form-group">
		    <label>Keterangan</label>
		    <input  class="form-control" id="tanaman" name="tanaman" value="<?= $b->keterangan?>" disabled>
		  </div>
       <?php  endforeach; ?>
			<a href="<?php echo site_url('search/tampil_permohonan') ?>">back</a>
  </form>
</body>
</html>
